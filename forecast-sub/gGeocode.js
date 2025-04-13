var geocoder = false;
var viewport = false;
var inputfield = false;
var feedbackdiv = false;
var progressicon = false;

function getLocationResults(objInput, objFeedback, objProgress){
	if(objFeedback) feedbackdiv = objFeedback;
	if(objProgress) progressicon = objProgress;
	if(!geocoder){
		geocoder = new GClientGeocoder();
		geocoder.setBaseCountryCode('US');
		if(viewport) geocoder.setViewport(viewport);
	}
	inputfield = objInput;
	geocoder.getLocations(objInput.value, locationSearchCallback);
	feedbackdiv.style.display = 'none';
	progressicon.oldsrc = progressicon.src;
	progressicon.src = '/images/wtf/progress.gif';
}

function getPointLink(point){
	var list='?lat='+point.y+'&lon='+point.x+'&site='+gmsite+'&smap=1';
	return 'http://forecast.weather.gov/MapClick.php'+list;
}

function locationSearchCallback(response){
	var target = feedbackdiv;
	while(target.firstChild != target.lastChild) target.removeChild(target.firstChild); // empty any previous results
	if (!response || response.Status.code != 200) {
		target.insertBefore(document.createTextNode('The location you searched for was not found. Please try another search.'), target.lastChild);
		target.insertBefore(document.createElement('br'), target.lastChild);
	} else {
		for(i=0; i < response.Placemark.length; i++){
			var country = 'NONE';
			if(response.Placemark[i].AddressDetails && response.Placemark[i].AddressDetails.Country){
				country = response.Placemark[i].AddressDetails.Country.CountryNameCode;
			}
			if(country != 'US' && country != 'GU' && country != 'PR' && country != 'AS' && country != 'FM' && country != 'MH'){
				response.Placemark.splice(i,1);
				i--;
			}
		}
		if(response.Placemark.length <= 0){
			target.insertBefore(document.createTextNode('The location you searched for was not found. Please try another search.'), target.lastChild);
			target.insertBefore(document.createElement('br'), target.lastChild);
		} else if(response.Placemark.length == 1){
			var place = response.Placemark[0];
			var link = getPointLink(new GLatLng(place.Point.coordinates[1], place.Point.coordinates[0]));
			if(link.indexOf('javascript:') == 0){
				eval(link.substr(11));
			} else {
				// NOTE: Using location.href as below causes FF3 to not store the current page in the history, for some strange reason. Thus we use the odd form.action=;form.submit() method.
				//location.href = getPointLink(new GLatLng(place.Point.coordinates[1], place.Point.coordinates[0])) + "&searchresult=" + escape(place.address);
				inputfield.form.action = link + "&searchresult=" + escape(place.address);
				inputfield.form.method = 'post';
				inputfield.form.submit();
			}
		} else {
			target.insertBefore(document.createTextNode('Multiple locations were found. Please select one of the following:'), target.lastChild);
			target.insertBefore(document.createElement('br'), target.lastChild);
			for(i in response.Placemark){
				var place = response.Placemark[i];
				var opt = document.createElement('a');
				opt.setAttribute('href', getPointLink(new GLatLng(place.Point.coordinates[1], place.Point.coordinates[0])) + "&searchresult=" + escape(place.address));
				opt.appendChild(document.createTextNode(place.address));
				target.insertBefore(opt, target.lastChild);
				target.insertBefore(document.createElement('br'), target.lastChild);
			}
		}
	}
	if(target.firstChild != target.lastChild){
		target.style.display = 'block';
	}
	if(progressicon.oldsrc && progressicon.oldsrc.length > 0) progressicon.src = progressicon.oldsrc;
}


