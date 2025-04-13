// Helper function to parse query parameters from the URL
function getQueryParams() {
    const params = {};
    const queryString = window.location.search.substring(1);
    const pairs = queryString.split("&");
    pairs.forEach(pair => {
      const parts = pair.split("=");
      if (parts.length === 2) {
        params[decodeURIComponent(parts[0].trim())] = decodeURIComponent(parts[1].trim());
      }
    });
    return params;
  }
  
  // Retrieve values from the URL extension
  const queryParams = getQueryParams();
  const lat = queryParams.textField1 ? parseFloat(queryParams.textField1) : 37.27;
  const lon = queryParams.textField2 ? parseFloat(queryParams.textField2) : -107.88;
  const cityName = queryParams.CityName || 'Durango';
  const state = queryParams.state || 'CO';
  
  // Define an async self-invoking function that will fetch and display the weather data
  (async function() {
    try {
      // Fetch point data (which includes the forecast URL and observation station list)
      const pointUrl = `https://api.weather.gov/points/${lat},${lon}`;
      const pointRes = await fetch(pointUrl);
      if (!pointRes.ok) { throw new Error("Error fetching point data"); }
      const pointData = await pointRes.json();
  
      // Fetch the forecast using the URL provided in point data
      const forecastUrl = pointData.properties.forecast;
      const forecastRes = await fetch(forecastUrl);
      if (!forecastRes.ok) { throw new Error("Error fetching forecast data"); }
      const forecastData = await forecastRes.json();
  
      // Fetch the list of observation stations
      const stationsUrl = pointData.properties.observationStations;
      const stationsRes = await fetch(stationsUrl);
      const stationsData = await stationsRes.json();
      let obsData = null;
      if (stationsData.features && stationsData.features.length > 0) {
        // Use the first available observation station
        const stationId = stationsData.features[0].properties.stationIdentifier;
        const obsUrl = `https://api.weather.gov/stations/${stationId}/observations/latest`;
        const obsRes = await fetch(obsUrl);
        if (!obsRes.ok) { throw new Error("Error fetching observation data"); }
        obsData = await obsRes.json();
      }
  
      // Plug the city name and state into a placeholder (if found)
      const currentCityEl = document.getElementById("currentCity");
      if (currentCityEl) {
        currentCityEl.textContent = `${cityName}, ${state}`;
      }
  
      // Display the current observation data in a placeholder element
      const obsContainer = document.getElementById("currentObservation");
      if (obsContainer && obsData && obsData.properties) {
        obsContainer.innerHTML = `
          <h2>Current Conditions</h2>
          <p>Temperature: ${
            obsData.properties.temperature.value !== null
              ? obsData.properties.temperature.value.toFixed(1) + "°C"
              : "N/A"
          }</p>
          <p>Wind: ${
            obsData.properties.windSpeed.value !== null
              ? obsData.properties.windSpeed.value.toFixed(1) + " m/s"
              : "N/A"
          }</p>
          <p>Humidity: ${
            obsData.properties.relativeHumidity.value !== null
              ? obsData.properties.relativeHumidity.value + "%"
              : "N/A"
          }</p>
          <p>Description: ${obsData.properties.textDescription || "No description available"}</p>
        `;
      }
  
      // Display the 7-day forecast in a placeholder element
      const forecastContainer = document.getElementById("forecastList");
      if (forecastContainer && forecastData.properties && forecastData.properties.periods) {
        let forecastHTML = `<h2>7-Day Forecast</h2>`;
        forecastData.properties.periods.forEach(period => {
          forecastHTML += `
            <div class="forecast">
              <h3>${period.name}</h3>
              <img src="${period.icon}" alt="${period.shortForecast}">
              <p>${period.temperature}° ${period.temperatureUnit} - ${period.shortForecast}</p>
              <p>${period.detailedForecast}</p>
            </div>
          `;
        });
        forecastContainer.innerHTML = forecastHTML;
      }
    } catch (err) {
      console.error("Weather script error:", err);
    }
  })();