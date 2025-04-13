<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/main_php.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Doppler Radar National Mosaic - NOAA's National Weather Service</title>
<meta name="DC.title" content="Doppler Radar National Mosaic - NOAA's National Weather Service" />
<meta name="DC.description" content="Latest weather radar images from the National Weather Service" />
<meta name="Keywords" content="weather,forecast,doppler radar,national weather,weather service,tropical weather,city zip code,hurricane, tornado,watch,warning." />
<meta name="DC.subject" content="Weather, Warnings, Forecasts, Model Products, Climate information, Facsimile Charts, Observations, links to government web sites, documentation on meteorology, meteorological standards, Telecommunication protocols, WMO Abbreviated Headings, National Oceanic Atmospheric Administration organization, NESDIS Imagery, hydrometeorologic, hydrologic" />
<meta name="DC.date.reviewed" scheme="ISO8601" content="2006-03-27" />
<meta name="DC.date.created" scheme="ISO8601" content="2002-07-01" />
<style type="text/css">
#tabs {
	position:relative;
	left:14px;
	top:0px;
}

#map {
	position:relative;
	left:14px;
	top:0px;
	z-index: 2;
}

table.sector { border-collapse:collapse; }

table.sector td a {
	display:block;
	width:4.85em;
	padding:3px;
}

table.sector td a:hover, table.sector td a:active { background:#0A2390; }
</style>
<!-- InstanceEndEditable -->
<meta name="DC.format" content="text/html; charset=iso-8859-1" />
<meta name="DC.language" scheme="DCTERMS.RFC1766" content="EN-US" />
<meta name="DC.Distribution" content="Global" />
<meta name="DC.robot" content="all" />
<meta name="DC.creator" content="NOAA's National Weather Service" />
<meta name="DC.contributor" content="NWS Internet Services Team" />
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />
<link rel="DC.rights" href="http://www.weather.gov/disclaimer.php" />
<link rel="stylesheet" type="text/css" href="/main.css" />
<link href="/favicon.ico" rel="shortcut icon" />
<script type="text/javascript" language="JavaScript" src="/master.js"></script>
</head>
<body onload="init()" background="/images/background1.gif">
<!-- Start banner -->
<!-- start banner inc -->
<table cellspacing="0" cellpadding="0" border="0" width="100%" background="/images/topbanner.jpg">
  <tr>
    <td align="right" height="19"><a href="#contents"><img src="/images/skipgraphic.gif" alt="Skip Navigation Links" width="1" height="1" border="0" /></a> <a href="/"><span class="nwslink">weather.gov</span></a>&nbsp;</td>
  </tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td width="85" rowspan="2"><a href="http://www.noaa.gov"><img src="/images/noaaleft.jpg" alt="NOAA logo-Select to go to the NOAA homepage" width="85" height="78" border="0" /></a></td>
    <td width="500" height="20" align="center" nowrap="nowrap" background="/officenames/blank_title.jpg"><div class="source">National Oceanic and Atmospheric Administration's&nbsp;&nbsp;&nbsp;</div></td>
    <td rowspan="2" background="/images/wfo_bkgrnd.jpg">&nbsp;</td>
    <td width="85" rowspan="2" align="right"><a href="/"><img src="/images/nwsright.jpg" alt="Select to go to the NWS homepage" width="85" height="78" border="0" /></a></td>
  </tr>
  <tr>
    <td width="500" height="58" align="center" nowrap="nowrap" background="/officenames/blank_name.jpg"><div class="location">National Weather Service&nbsp;&nbsp;&nbsp;</div></td>
  </tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" background="/images/navbkgrnd.gif" width="100%">
  <tr>
    <td align="left" valign="top" width="94"><img src="/images/navbarleft.jpg" alt="" width="94" height="23" border="0" /></td>
    <td class="nav" width="15%" align="center" id="menuitem" nowrap="nowrap"><a href="/sitemap.php">Site Map</a></td>
    <td class="nav" width="15%" align="right" id="menuitem"><a href="/pa/">News</a></td>
    <td class="nav" width="20%" align="right" id="menuitem"><a href="/organization.php">Organization</a> </td>
    <td width="20%">&nbsp;</td>
    <td align="left" class="searchinput" width="20%" nowrap="nowrap"><!-- Begin search code -->
      <form method="get" action="http://usasearch.gov/search" style="margin-bottom:0; margin-top:0;">
        <input type="hidden" name="v:project" value="firstgov" />
        <label for="query" class="yellow">Search&nbsp;&nbsp;</label>
        <input type="text" name="query" id="query" size="10"/>
        <input type="radio" name="affiliate" checked="checked" value="nws.noaa.gov" id="nws" />
        <label for="nws" class="yellow">NWS</label>
        <input type="radio" name="affiliate" value="noaa.gov" id="noaa" />
        <label for="noaa" class="yellow">All NOAA</label>
        <input type="submit" value="Go" />
      </form>
      <!-- End search code -->
    </td>
    <td width="10%">&nbsp;</td>
    <td align="right" valign="bottom" width="24"><img src="/images/navbarendcap.jpg" alt="" width="24" height="23" border="0" /></td>
  </tr>
</table>
<!-- end banner inc --><!-- end banner -->
<table width="700" border="0" cellspacing="0">
  <tr>
    <td width="119" valign="top"><!-- start leftmenu -->
      <!-- ========== start leftmenu inc ========== -->

<table width="119" border="0" cellpadding="2" cellspacing="0" bgcolor="#0A2390">
  <!-- ********** local forecast search ********** -->
  <tr>
    <td class="yellow" align="center">Local forecast by<br />
      &quot;City, St&quot; </td>
  </tr>
  <tr align="center" valign="top">
    <td align="left" valign="bottom" nowrap="nowrap" class="searchinput"><form method="post" action="http://forecast.weather.gov/zipcity.php" style="margin-bottom:0; margin-top:0; ">
        <div id="Layer2" style="position:absolute; width:200px;  height:115px; z-index:2; visibility: hidden">Search
          by city. Press enter or select the go button to submit request</div>
        <input type="text" id="zipcity" name="inputstring" size="9" value="City, St" onfocus="this.value='';" />
        <input type="submit" name="Go2" value="Go" />
      </form></td>
  </tr>
  <!-- ********** end local forecast search ********** -->
  <tr>
    <td class="white" id="menuitem">&#160;<a href="/rss/"><img src="/images/xml.gif" alt="RSS Feeds" title="RSS Feeds" width="36" height="14" border="0" /> RSS 		Feeds</a><br />
      <a href="/warnings.php"><span class="yellow">Warnings</span></a><br />
      &#160;<a href="/view/nationalwarnings.php?map=on">Current</a><br />
      &#160;<a href="/alerts-beta/">By State/County...</a><br />
      &#160;<a href="http://www.cpc.ncep.noaa.gov/products/stratosphere/uv_index/uv_alert.shtml">UV Alerts</a><br />
    </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/observations.php"><span class="yellow">Observations</span></a><br />
      &#160;<a href="/radar_tab.php">Radar</a><br />
      &#160;<a href="http://www.goes.noaa.gov/">Satellite</a><br />
      &#160;<a href="http://www.nohrsc.nws.gov/">Snow Cover</a><br />
      &#160;<a href="/om/osd/portal.shtml">Surface Weather...</a><br />
      &#160;<a href="http://water.weather.gov/">Observed Precip</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/forecasts.php"><span class="yellow">Forecasts</span></a><br />
      &#160;<a href="/organization.php">Local</a><br />
      &#160;<a href="/forecasts/graphical/">Graphical</a><br />
      &#160;<a href="http://aviationweather.gov/">Aviation</a><br />
      &#160;<a href="/om/marine/home.htm">Marine</a><br />
      &#160;<a href="http://www.nhc.noaa.gov/">Hurricanes</a><br />
      &#160;<a href="http://www.spc.noaa.gov/">Severe Weather</a><br />
      &#160;<a href="http://www.spc.noaa.gov/products/fire_wx/">Fire Weather</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><span class="yellow">Text Messages</span><br />
      &#160;<a href="/view/states.php">By State</a><br />
      &#160;<a href="/view/validProds.php">By Message Type</a><br />
      &#160;<a href="/view/national.php?map=on">National</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/maps.php"><span class="yellow">Forecast Models</span></a><br />
      &#160;<a href="http://www.nco.ncep.noaa.gov/pmb/nwprod/analysis/">Numerical Models</a><br />
      &#160;Statistical Models...<br />
      &#160;&#160;&#160;<a href="/mdl/synop/products.php">MOS Prod</a><br />
      &#160;&#160;&#160;<a href="/mdl/gfslamp/gfslamp.shtml">GFS-LAMP Prod</a><br /></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><span class="yellow">Climate</span><br />
      &#160;<a href="/climate/">Past Weather</a><br />
      &#160;<a href="/predictions.php">Predictions</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/safety.php"><span class="yellow">Weather Safety</span></a><br />
      &#160;<a href="/nwr/">Weather Radio</a><br />
      &#160;<a href="http://www.cpc.noaa.gov/products/expert_assessment/threats.html">Hazard Assmt...</a><br />
      &#160;<a href="http://www.stormready.noaa.gov/">StormReady</a> /<br />
      &#160;<a href="http://www.stormready.noaa.gov/tsunamiready/">TsunamiReady</a> <br />
      &#160;<a href="http://weather.gov/skywarn/">Skywarn&#8482;</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/education.php"><span class="yellow">Education/Outreach</span></a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/information_center.php"><span class="yellow">Information Center</span></a><br />
      &#160;<a href="http://tsunami.gov/">Tsunamis</a><br />
      &#160;<a href="/om/publications.shtml">Publications...</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="/feedback.php"><span class="yellow">Contact Us</span></a><br />
      &#160;<a href="/pa/faq.php">FAQ</a><br />
      &#160;<a href="/feedback.php">Comments...</a> </td>
  </tr>
  <tr>
    <td align="center"><a href="http://www.usa.gov/"><img src="/images/usagov_logo_color_110w.gif" alt="USA.gov is the U.S. government's official web portal to all federal, state and local government web resources and services." width="110" height="30" border="0" title="USA.gov is the U.S. government's official web portal to all federal, state and local government web resources and services." /></a> </td>
  </tr>
</table>
<!-- ========== end leftmenu inc ========== -->
      <!-- end leftmenu --></td>
    <td width="525" valign="top"><!-- Start Content area... 525px wide -->
      <!-- InstanceBeginEditable name="Content" --> 
      <p align="center"><a name="contents" id="contents">&nbsp;</a>
        NWS is accepting comments on <a href="http://radar.srh.noaa.gov/">proposed combined warning and radar displays</a> until May</p>
      <div id="tabs">
        <table width="609" border="0" cellpadding="0" cellspacing="0" height="29">
          <tr valign="bottom">
            <td colspan="2" align="center"><table width="525" border="0" cellpadding="0" cellspacing="0" class="tabs" name="Tabs">
                <tr align="center">
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="4" height="34" /></td>
                  <td background="images/tab_middle.off.jpg"><a href="/">Warnings &amp; Forecasts</a></td>
                  <td align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="/images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td background="/images/tab_middle.off.jpg"><a href="/forecasts/graphical/">Graphical
                      Forecasts</a></td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td background="images/tab_middle.off.jpg"><a href="outlook_tab.php">National
                      Maps</a></td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.on.jpg" alt="" width="3" height="34" /></td>
                  <td background="images/tab_middle.on.jpg" class="tabs">&nbsp;&nbsp;Radar&nbsp;&nbsp;</td>
                  <td align="left"><img src="images/tab_right.on.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td background="images/tab_middle.off.jpg">&nbsp;&nbsp;<a href="/ahps/">Water</a>&nbsp;&nbsp;</td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td nowrap="nowrap" background="images/tab_middle.off.jpg">&nbsp;<a href="/aq/">Air
                      Quality</a>&nbsp;</td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td background="images/tab_middle.off.jpg">&nbsp;<a href="sat_tab.php">Satellite</a>&nbsp;</td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                  <td align="right"><img src="images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
                  <td background="images/tab_middle.off.jpg">&nbsp;<a href="/climate/">Climate</a>&nbsp;</td>
                  <td align="left"><img src="images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div>
      <div id="map">
        <table width="604" height="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#0A2390">
          <tr>
            <td align="center"><span class="white" id="menuitem">Click on Map
                to Zoom In</span></td>
          </tr>
          <tr>
            <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="http://radar.weather.gov/Conus/RadarImg/latest_Small.gif" alt="Doppler Radar National Mosaic" width="600" height="282" border="0" usemap="#conusMap" title="Doppler Radar National Mosaic" /></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td><span class="white" id="menuitem">&nbsp;&nbsp;<a href="http://radar.weather.gov/Conus/full.php">Full
                  resolution version</a> (3400x1700 pixels - 220k) &nbsp;&nbsp;| &nbsp;&nbsp;</span> <span class="yellow">Go
                  to: </span><span class="white" id="menuitem"><a href="http://radar.weather.gov/Conus/index_loop.php"> Loop
                  of this Image</a>&nbsp;&nbsp; | &nbsp;&nbsp;</span> <span class="yellow">Go
                  to: </span> <span class="white" id="menuitem"><a href="http://radar.weather.gov/Conus/index_lite.php">Standard
                  Version</a></span></td>
          </tr>
        </table>
        <map name="conusMap" id="conusMap">
          <area shape="poly" coords="77,0,73,25,65,36,7,26,12,0,77,0,77,0" href="http://radar.weather.gov/radar.php?rid=atx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Seattle/Tacoma, WA Doppler radar" title="Go to the Seattle/Tacoma, WA Doppler radar" />
          <area shape="poly" coords="121,0,113,44,108,46,74,26,77,0,118,0,121,0,121,0" href="http://radar.weather.gov/radar.php?rid=otx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Spokane, WA Doppler radar" title="Go to the Spokane, WA Doppler radar" />
          <area shape="poly" coords="141,0,149,50,131,55,114,44,121,0,141,0,141,0" href="http://radar.weather.gov/radar.php?rid=msx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Missoula, MT Doppler radar" title="Go to the Missoula, MT Doppler radar" />
          <area shape="poly" coords="84,75,77,75,65,62,65,38,73,26,109,46,84,75,84,75" href="http://radar.weather.gov/radar.php?rid=pdt&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Pendleton, OR Doppler radar" title="Go to the Pendleton, OR Doppler radar" />
          <area shape="poly" coords="7,26,66,37,66,62,18,65,7,63,7,26,7,26" href="http://radar.weather.gov/radar.php?rid=rtx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Portland, OR Doppler radar" title="Go to the Portland, OR Doppler radar" />
          <area shape="poly" coords="10,138,36,119,42,112,47,97,16,66,7,63,10,134,10,138,10,138" href="http://radar.weather.gov/radar.php?rid=bhx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Eureka, CA Doppler radar" title="Go to the Eureka, CA Doppler radar" />
          <area shape="poly" coords="84,75,102,123,76,121,69,110,67,90,75,77,84,75,84,75" href="http://radar.weather.gov/radar.php?rid=rgx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Reno, NV Doppler radar" title="Go to the Reno, NV Doppler radar" />
          <area shape="poly" coords="130,55,126,85,81,76,109,45,113,44,130,55,130,55" href="http://radar.weather.gov/radar.php?rid=cbx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Boise, ID Doppler radar" title="Go to the Boise, ID Doppler radar" />
          <area shape="poly" coords="179,0,182,21,163,54,150,49,142,0,170,0,179,0,179,0" href="http://radar.weather.gov/radar.php?rid=tfx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Great Falls, MT Doppler radar" title="Go to the Great Falls, MT Doppler radar" />
          <area shape="poly" coords="76,75,66,89,47,96,16,65,63,62,74,73,76,75,76,75" href="http://radar.weather.gov/radar.php?rid=max&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Medford, OR Doppler radar" title="Go to the Medford, OR Doppler radar" />
          <area shape="poly" coords="67,89,68,109,43,111,48,96,67,89,67,89" href="http://radar.weather.gov/radar.php?rid=bbx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Beal AFB, CA Doppler radar" title="Go to the Beal AFB, CA Doppler radar" />
          <area shape="poly" coords="74,119,69,125,37,118,42,112,68,108,74,119" href="http://radar.weather.gov/radar.php?rid=dax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Sacramento, CA Doppler radar" title="Go to the Sacramento, CA Doppler radar" />
          <area shape="poly" coords="69,126,64,141,22,168,10,138,37,119,69,126,69,126" href="http://radar.weather.gov/radar.php?rid=mux&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the San Francisco Bay Area, CA Doppler radar" title="Go to the San Francisco Bay Area, CA Doppler radar" />
          <area shape="poly" coords="77,147,64,140,69,127,74,122,100,122,88,147,77,147,77,147" href="http://radar.weather.gov/radar.php?rid=hnx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the San Joaquin Valley, CA Doppler radar" title="Go to the San Joaquin Valley, CA Doppler radar" />
          <area shape="poly" coords="23,168,65,141,79,148,58,216,25,172,23,168,23,168" href="http://radar.weather.gov/radar.php?rid=vbx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Vandenberg AFB, CA Doppler radar" title="Go to the Vandenberg AFB, CA Doppler radar" />
          <area shape="poly" coords="87,148,92,156,80,184,57,214,79,148,87,148,87,148" href="http://radar.weather.gov/radar.php?rid=vtx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Los Angeles, CA Doppler radar" title="Go to the Los Angeles, CA Doppler radar" />
          <area shape="poly" coords="108,125,114,156,93,156,88,148,101,123,108,125,108,125" href="http://radar.weather.gov/radar.php?rid=eyx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Edwards AFB, CA Doppler radar" title="Go to the Edwards AFB, CA Doppler radar" />
          <area shape="poly" coords="114,157,83,179,93,156,114,157,114,157" href="http://radar.weather.gov/radar.php?rid=sox&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Santa Ana Mtns, CA Doppler radar" title="Go to the Santa Ana Mtns, CA Doppler radar" />
          <area shape="poly" coords="85,76,127,86,128,105,120,118,107,122,101,122,85,76,85,76" href="http://radar.weather.gov/radar.php?rid=lrx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Elko, NV Doppler radar" title="Go to the Elko, NV Doppler radar" />
          <area shape="poly" coords="119,118,144,143,142,153,137,159,118,159,114,157,106,123,119,118,119,118" href="http://radar.weather.gov/radar.php?rid=esx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Las Vegas, NV Doppler radar" title="Go to the Las Vegas, NV Doppler radar" />
          <area shape="poly" coords="104,232,57,217,83,178,114,158,117,162,106,224,104,232,104,232" href="http://radar.weather.gov/radar.php?rid=nkx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the San Diego, CA Doppler radar" title="Go to the San Diego, CA Doppler radar" />
          <area shape="poly" coords="137,158,146,184,138,236,105,232,118,160,137,158,137,158" href="http://radar.weather.gov/radar.php?rid=yux&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Yuma, AZ Doppler radar" title="Go to the Yuma, AZ Doppler radar" />
          <area shape="poly" coords="149,49,163,54,167,60,167,78,127,84,130,57,149,49,149,49" href="http://radar.weather.gov/radar.php?rid=sfx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Pocatello/Idaho Falls, ID Doppler radar" title="Go to the Pocatello/Idaho Falls, ID Doppler radar" />
          <area shape="poly" coords="166,77,173,93,165,110,129,105,127,85,166,77,166,77" href="http://radar.weather.gov/radar.php?rid=mtx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Salt Lake City, UT Doppler radar" title="Go to the Salt Lake City, UT Doppler radar" />
          <area shape="poly" coords="164,109,171,128,146,146,119,118,129,106,164,109,164,109" href="http://radar.weather.gov/radar.php?rid=icx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Cedar City, UT Doppler radar" title="Go to the Cedar City, UT Doppler radar" />
          <area shape="poly" coords="170,131,182,137,184,164,171,167,142,155,144,145,170,131,170,131" href="http://radar.weather.gov/radar.php?rid=fsx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Flagstaff, AZ Doppler radar" title="Go to the Flagstaff, AZ Doppler radar" />
          <area shape="poly" coords="146,186,139,159,142,155,171,166,146,186,146,186" href="http://radar.weather.gov/radar.php?rid=iwa&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Phoenix, AZ Doppler radar" title="Go to the Phoenix, AZ Doppler radar" />
          <area shape="poly" coords="184,163,186,166,186,237,139,236,145,186,172,168,184,163,184,163" href="http://radar.weather.gov/radar.php?rid=emx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Tucson, AZ Doppler radar" title="Go to the Tucson, AZ Doppler radar" />
          <area shape="poly" coords="234,0,234,33,217,50,183,22,179,0,234,0,234,0" href="http://radar.weather.gov/radar.php?rid=ggw&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Glasgow, MT Doppler radar" title="Go to the Glasgow, MT Doppler radar" />
          <area shape="poly" coords="215,57,167,59,164,53,182,21,218,51,215,57,215,57" href="http://radar.weather.gov/radar.php?rid=blx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Billings, MT Doppler radar" title="Go to the Billings, MT Doppler radar" />
          <area shape="poly" coords="211,57,214,63,200,90,172,93,166,78,167,58,211,57,211,57" href="http://radar.weather.gov/radar.php?rid=riw&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Riverton, WY Doppler radar" title="Go to the Riverton, WY Doppler radar" />
          <area shape="poly" coords="206,101,210,115,209,127,180,136,171,131,165,110,173,93,200,90,206,101,206,101" href="http://radar.weather.gov/radar.php?rid=gjx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Grand Junction, CO Doppler radar" title="Go to the Grand Junction, CO Doppler radar" />
          <area shape="poly" coords="209,125,221,138,219,156,188,167,185,164,182,136,208,128,209,125,209,125" href="http://radar.weather.gov/radar.php?rid=abx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Albuquerque, NM Doppler radar" title="Go to the Albuquerque, NM Doppler radar" />
          <area shape="poly" coords="219,156,230,174,228,185,191,167,219,156,219,156" href="http://radar.weather.gov/radar.php?rid=hdx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Holloman AFB, NM Doppler radar" title="Go to the Holloman AFB, NM Doppler radar" />
          <area shape="poly" coords="226,184,227,215,219,239,186,237,186,166,226,184,226,184" href="http://radar.weather.gov/radar.php?rid=epz&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the El Paso, TX Doppler radar" title="Go to the El Paso, TX Doppler radar" />
          <area shape="poly" coords="286,0,279,26,234,30,235,0,286,0,286,0" href="http://radar.weather.gov/radar.php?rid=mbx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Minot AFB, ND Doppler radar" title="Go to the Minot AFB, ND Doppler radar" />
          <area shape="poly" coords="279,27,280,33,266,58,234,34,235,30,279,27,279,27" href="http://radar.weather.gov/radar.php?rid=bis&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Bismarck, ND Doppler radar" title="Go to the Bismarck, ND Doppler radar" />
          <area shape="poly" coords="243,83,216,64,215,57,217,50,234,33,266,59,243,83,243,83" href="http://radar.weather.gov/radar.php?rid=udx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Rapid City, SD Doppler radar" title="Go to the Rapid City, SD Doppler radar" />
          <area shape="poly" coords="243,88,239,95,206,101,200,89,215,63,242,82,243,88,243,88" href="http://radar.weather.gov/radar.php?rid=cys&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Cheyenne, WY Doppler radar" title="Go to the Cheyenne, WY Doppler radar" />
          <area shape="poly" coords="242,94,241,106,210,115,208,102,242,94,242,94" href="http://radar.weather.gov/radar.php?rid=ftg" alt="Go to the Denver/Boulder, CO Doppler radar" title="Go to the Denver/Boulder, CO Doppler radar" />
          <area shape="poly" coords="240,107,248,127,241,134,221,137,210,126,210,116,240,107,240,107" href="http://radar.weather.gov/radar.php?rid=pux&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Pueblo, CO Doppler radar" title="Go to the Pueblo, CO Doppler radar" />
          <area shape="poly" coords="240,133,246,156,240,170,230,173,219,157,222,136,240,133,240,133" href="http://radar.weather.gov/radar.php?rid=fdx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Cannon AFB, NM Doppler radar" title="Go to the Cannon AFB, NM Doppler radar" />
          <area shape="poly" coords="242,169,261,175,254,197,227,217,228,186,231,174,242,169,242,169" href="http://radar.weather.gov/radar.php?rid=maf&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Midland/Odessa, TX Doppler radar" title="Go to the Midland/Odessa, TX Doppler radar" />
          <area shape="poly" coords="327,0,322,32,313,45,307,45,281,32,279,26,287,0,327,0,327,0" href="http://radar.weather.gov/radar.php?rid=mvx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Fargo, ND Doppler radar" title="Go to the Fargo, ND Doppler radar" />
          <area shape="poly" coords="307,46,281,69,266,59,282,32,307,46,307,46" href="http://radar.weather.gov/radar.php?rid=abr&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Aberdeen, SD Doppler radar" title="Go to the Aberdeen, SD Doppler radar" />
          <area shape="poly" coords="282,70,285,78,269,100,244,89,244,83,266,59,282,70,282,70" href="http://radar.weather.gov/radar.php?rid=lnx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the North Platte, NE Doppler radar" title="Go to the North Platte, NE Doppler radar" />
          <area shape="poly" coords="268,99,270,108,250,128,247,127,239,107,241,95,245,91,268,99,268,99" href="http://radar.weather.gov/radar.php?rid=gld&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Goodland, KS Doppler radar" title="Go to the Goodland, KS Doppler radar" />
          <area shape="poly" coords="284,115,284,122,270,142,250,128,273,107,284,115,284,115" href="http://radar.weather.gov/radar.php?rid=ddc&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Dodge City, KS Doppler radar" title="Go to the Dodge City, KS Doppler radar" />
          <area shape="poly" coords="270,141,265,156,246,156,241,134,248,127,250,128,270,141,270,141" href="http://radar.weather.gov/radar.php?rid=ama&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Amarillo, TX Doppler radar" title="Go to the Amarillo, TX Doppler radar" />
          <area shape="poly" coords="265,157,268,165,264,173,260,173,260,175,240,169,246,157,265,157,265,157" href="http://radar.weather.gov/radar.php?rid=lbb&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Lubbock, TX Doppler radar" title="Go to the Lubbock, TX Doppler radar" />
          <area shape="poly" coords="276,196,281,215,274,230,245,255,219,239,228,217,253,199,276,196,276,196" href="http://radar.weather.gov/radar.php?rid=dfx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Laughlin AFB, TX Doppler radar" title="Go to the Laughlin AFB, TX Doppler radar" />
          <area shape="poly" coords="370,43,349,50,322,32,326,0,372,0,370,43,370,43" href="http://radar.weather.gov/radar.php?rid=dlh&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Duluth, MN Doppler radar" title="Go to the Duluth, MN Doppler radar" />
          <area shape="poly" coords="349,51,342,69,321,68,313,46,323,32,349,51,349,51" href="http://radar.weather.gov/radar.php?rid=mpx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Minneapolis, MN Doppler radar" title="Go to the Minneapolis, MN Doppler radar" />
          <area shape="poly" coords="321,69,319,75,290,80,287,77,282,70,307,47,312,47,321,69,321,69" href="http://radar.weather.gov/radar.php?rid=fsd&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Sioux falls, SD Doppler radar" title="Go to the Sioux falls, SD Doppler radar" />
          <area shape="poly" coords="289,80,299,100,294,110,285,114,272,108,269,100,286,79,289,80,289,80" href="http://radar.weather.gov/radar.php?rid=uex&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Grand Island, NE Doppler radar" title="Go to the Grand Island, NE Doppler radar" />
          <area shape="poly" coords="317,76,320,95,318,99,300,100,291,81,317,76,317,76" href="http://radar.weather.gov/radar.php?rid=oax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Omaha, NE Doppler radar" title="Go to the Omaha, NE Doppler radar" />
          <area shape="poly" coords="318,99,317,123,310,126,295,109,299,100,318,99,318,99" href="http://radar.weather.gov/radar.php?rid=twx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Topeka, KS Doppler radar" title="Go to the Topeka, KS Doppler radar" />
          <area shape="poly" coords="302,135,284,124,284,115,294,109,312,127,302,135,302,135" href="http://radar.weather.gov/radar.php?rid=ict&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Wichita, KS Doppler radar" title="Go to the Wichita, KS Doppler radar" />
          <area shape="poly" coords="300,135,284,146,272,140,284,124,300,135,300,135" href="http://radar.weather.gov/radar.php?rid=vnx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Vance AFB, OK Doppler radar" title="Go to the Vance AFB, OK Doppler radar" />
          <area shape="poly" coords="301,136,312,156,311,161,293,161,285,146,301,136,301,136" href="http://radar.weather.gov/radar.php?rid=tlx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Oklahoma City, OK Doppler radar" title="Go to the Oklahoma City, OK Doppler radar" />
          <area shape="poly" coords="292,160,289,166,268,164,265,155,271,141,284,145,292,160,292,160" href="http://radar.weather.gov/radar.php?rid=fdr&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Frederick, OK Doppler radar" title="Go to the Frederick, OK Doppler radar" />
          <area shape="poly" coords="288,167,289,182,280,190,265,173,267,165,288,167,288,167" href="http://radar.weather.gov/radar.php?rid=dyx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Dyess AFB, TX Doppler radar" title="Go to the Dyess AFB, TX Doppler radar" />
          <area shape="poly" coords="279,190,276,196,252,199,262,174,265,174,279,190,279,190" href="http://radar.weather.gov/radar.php?rid=sjt&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the San Angelo, TX Doppler radar" title="Go to the San Angelo, TX Doppler radar" />
          <area shape="poly" coords="281,189,305,205,304,208,281,214,277,195,281,189,281,189" href="http://radar.weather.gov/radar.php?rid=ewx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Austin/San Antonio, TX Doppler radar" title="Go to the Austin/San Antonio, TX Doppler radar" />
          <area shape="poly" coords="305,209,318,230,273,232,284,215,305,209,305,209" href="http://radar.weather.gov/radar.php?rid=crp&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Corpus Christi, TX Doppler radar" title="Go to the Corpus Christi, TX Doppler radar" />
          <area shape="poly" coords="318,229,342,246,343,260,246,256,272,232,315,230,318,229,318,229" href="http://radar.weather.gov/radar.php?rid=bro&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Brownsville, TX Doppler radar" title="Go to the Brownsville, TX Doppler radar" />
          <area shape="poly" coords="315,185,305,206,282,190,287,183,315,185,315,185" href="http://radar.weather.gov/radar.php?rid=grk&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Central Texas Doppler radar" title="Go to the Central Texas Doppler radar" />
          <area shape="poly" coords="295,161,313,161,315,165,314,184,288,184,288,167,295,161,295,161" href="http://radar.weather.gov/radar.php?rid=fws&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Dallas/Fort Worth, TX Doppler radar" title="Go to the Dallas/Fort Worth, TX Doppler radar" />
          <area shape="poly" coords="433,0,403,52,370,41,373,0,433,0,433,0" href="http://radar.weather.gov/radar.php?rid=mqt&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Marquette, MI Doppler radar" title="Go to the Marquette, MI Doppler radar" />
          <area shape="poly" coords="372,62,369,73,349,79,342,70,349,52,369,44,372,62,372,62" href="http://radar.weather.gov/radar.php?rid=arx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the La Crosse, WI Doppler radar" title="Go to the La Crosse, WI Doppler radar" />
          <area shape="poly" coords="348,78,348,99,346,101,321,98,318,76,322,69,343,70,348,78,348,78" href="http://radar.weather.gov/radar.php?rid=dmx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Des Moines, IA Doppler radar" title="Go to the Des Moines, IA Doppler radar" />
          <area shape="poly" coords="345,113,321,127,317,124,318,102,323,98,345,102,345,113,345,113" href="http://radar.weather.gov/radar.php?rid=eax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Kansas City/Pleasant Hill, MO Doppler radar" title="Go to the Kansas City/Pleasant Hill, MO Doppler radar" />
          <area shape="poly" coords="312,156,302,136,311,126,317,124,327,136,312,156" href="http://radar.weather.gov/radar.php?rid=inx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Tulsa, OK Doppler radar" title="Go to the Tulsa, OK Doppler radar" />
          <area shape="poly" coords="327,136,338,142,334,159,315,164,313,160,313,154,327,135,327,136,327,136" href="http://radar.weather.gov/radar.php?rid=srx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Western Arkansas/Ft. Smith, AR Doppler radar" title="Go to the Western Arkansas/Ft. Smith, AR Doppler radar" />
          <area shape="poly" coords="334,160,351,171,326,188,314,186,315,165,334,160,334,160" href="http://radar.weather.gov/radar.php?rid=shv&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Shreveport, LA Doppler radar" title="Go to the Shreveport, LA Doppler radar" />
          <area shape="poly" coords="314,186,325,188,343,245,319,230,305,207,314,186,314,186" href="http://radar.weather.gov/radar.php?rid=hgx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Houston/Galveston, TX Doppler radar" title="Go to the Houston/Galveston, TX Doppler radar" />
          <area shape="poly" coords="325,189,355,197,357,260,343,261,343,241,325,189,325,189" href="http://radar.weather.gov/radar.php?rid=lch&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Lake Charles, LA Doppler radar" title="Go to the Lake Charles, LA Doppler radar" />
          <area shape="poly" coords="351,172,357,188,353,197,324,190,351,172,351,172" href="http://radar.weather.gov/radar.php?rid=poe&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Fort Polk, LA Doppler radar" title="Go to the Fort Polk, LA Doppler radar" />
          <area shape="poly" coords="358,260,384,263,388,256,388,253,377,186,357,188,355,199,357,256,358,260,358,260" href="http://radar.weather.gov/radar.php?rid=lix&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the New Orleans/Baton Rouge, LA Doppler radar" title="Go to the New Orleans/Baton Rouge, LA Doppler radar" />
          <area shape="poly" coords="361,163,372,164,385,178,375,187,357,188,351,172,361,163,361,163" href="http://radar.weather.gov/radar.php?rid=dgx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Jackson/Brandon, MS Doppler radar" title="Go to the Jackson/Brandon, MS Doppler radar" />
          <area shape="poly" coords="354,134,361,163,351,170,334,161,339,142,354,134,354,134" href="http://radar.weather.gov/radar.php?rid=lzk&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Little Rock, AR Doppler radar" title="Go to the Little Rock, AR Doppler radar" />
          <area shape="poly" coords="403,52,404,58,397,68,373,61,369,42,403,52,403,52" href="http://radar.weather.gov/radar.php?rid=grb&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Green Bay, WI Doppler radar" title="Go to the Green Bay, WI Doppler radar" />
          <area shape="poly" coords="397,68,397,75,375,83,369,73,373,61,397,68,397,68" href="http://radar.weather.gov/radar.php?rid=mkx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Milwaukee, WI Doppler radar" title="Go to the Milwaukee, WI Doppler radar" />
          <area shape="poly" coords="375,83,375,88,362,99,348,100,349,79,368,74,375,83,375,83" href="http://radar.weather.gov/radar.php?rid=dvn&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Quad Cities, IA Doppler radar" title="Go to the Quad Cities, IA Doppler radar" />
          <area shape="poly" coords="361,100,377,116,363,133,355,133,344,112,345,102,347,100,361,100,361,100" href="http://radar.weather.gov/radar.php?rid=lsx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the St. Louis, MO Doppler radar" title="Go to the St. Louis, MO Doppler radar" />
          <area shape="poly" coords="363,132,386,145,371,162,361,163,356,135,363,132,363,132" href="http://radar.weather.gov/radar.php?rid=nqa&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Memphis, TN Doppler radar" title="Go to the Memphis, TN Doppler radar" />
          <area shape="poly" coords="389,129,386,145,364,132,378,116,387,128,389,129" href="http://radar.weather.gov/radar.php?rid=pah&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Paducah, KY Doppler radar" title="Go to the Paducah, KY Doppler radar" />
          <area shape="poly" coords="390,102,378,115,361,100,376,88,390,102,390,102" href="http://radar.weather.gov/radar.php?rid=ilx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Central Illinois, IL Doppler radar" title="Go to the Central Illinois, IL Doppler radar" />
          <area shape="poly" coords="396,76,399,80,400,93,390,103,376,87,376,84,396,76,396,76" href="http://radar.weather.gov/radar.php?rid=lot&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Chicago, IL Doppler radar" title="Go to the Chicago, IL Doppler radar" />
          <area shape="poly" coords="391,103,401,113,400,124,388,128,378,116,391,103,391,103" href="http://radar.weather.gov/radar.php?rid=vwx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Evansville, IN Doppler radar" title="Go to the Evansville, IN Doppler radar" />
          <area shape="poly" coords="401,126,404,130,391,148,386,148,389,127,401,126,401,126" href="http://radar.weather.gov/radar.php?rid=hpx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Fort Campbell, KY Doppler radar" title="Go to the Fort Campbell, KY Doppler radar" />
          <area shape="poly" coords="387,146,394,150,397,158,386,177,371,162,387,146,387,146" href="http://radar.weather.gov/radar.php?rid=gwx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Columbus AFB, MS Doppler radar" title="Go to the Columbus AFB, MS Doppler radar" />
          <area shape="poly" coords="400,184,395,246,389,254,377,186,387,176,400,184,400,184" href="http://radar.weather.gov/radar.php?rid=mob&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Mobile, AL Doppler radar" title="Go to the Mobile, AL Doppler radar" />
          <area shape="poly" coords="413,225,394,249,399,185,415,192,413,225,413,225" href="http://radar.weather.gov/radar.php?rid=evx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Northwest Florida Doppler radar" title="Go to the Northwest Florida Doppler radar" />
          <area shape="poly" coords="412,163,398,157,387,178,398,183,412,163,412,163" href="http://radar.weather.gov/radar.php?rid=bmx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Birmingham, AL Doppler radar" title="Go to the Birmingham, AL Doppler radar" />
          <area shape="poly" coords="394,148,393,146,404,130,418,134,419,139,394,148,394,148" href="http://radar.weather.gov/radar.php?rid=ohx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Nashville, TN Doppler radar" title="Go to the Nashville, TN Doppler radar" />
          <area shape="poly" coords="417,111,422,117,421,131,419,133,403,130,400,124,402,115,417,111,417,111" href="http://radar.weather.gov/radar.php?rid=lvx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Louisville, KY Doppler radar" title="Go to the Louisville, KY Doppler radar" />
          <area shape="poly" coords="401,94,419,101,418,111,403,114,389,103,401,94,401,94" href="http://radar.weather.gov/radar.php?rid=ind&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Indianapolis, IN Doppler radar" title="Go to the Indianapolis, IN Doppler radar" />
          <area shape="poly" coords="406,58,424,66,423,82,401,80,398,76,398,68,406,58,406,58" href="http://radar.weather.gov/radar.php?rid=grr&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Grand Rapids/Muskegon, MI Doppler radar" title="Go to the Grand Rapids/Muskegon, MI Doppler radar" />
          <area shape="poly" coords="423,82,427,90,418,101,399,93,400,80,423,82,423,82" href="http://radar.weather.gov/radar.php?rid=iwx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Northern Indiana, IN Doppler radar" title="Go to the Northern Indiana, IN Doppler radar" />
          <area shape="poly" coords="419,139,424,151,413,161,397,158,396,149,419,139,419,139" href="http://radar.weather.gov/radar.php?rid=htx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Northern Alabama Doppler radar" title="Go to the Northern Alabama Doppler radar" />
          <area shape="poly" coords="471,0,456,48,423,66,405,59,404,52,434,0,471,0,471,0" href="http://radar.weather.gov/radar.php?rid=apx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Gaylord, MI Doppler radar" title="Go to the Gaylord, MI Doppler radar" />
          <area shape="poly" coords="455,49,456,64,436,90,427,90,424,81,424,66,455,49,455,49" href="http://radar.weather.gov/radar.php?rid=dtx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Detroit, MI Doppler radar" title="Go to the Detroit, MI Doppler radar" />
          <area shape="poly" coords="446,104,438,116,424,118,417,111,418,101,428,92,436,93,446,104,446,104" href="http://radar.weather.gov/radar.php?rid=iln&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Wilmington, OH Doppler radar" title="Go to the Wilmington, OH Doppler radar" />
          <area shape="poly" coords="438,116,448,133,421,132,423,119,438,116,438,116" href="http://radar.weather.gov/radar.php?rid=jkl&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Jackson, KY Doppler radar" title="Go to the Jackson, KY Doppler radar" />
          <area shape="poly" coords="449,134,450,137,432,154,426,152,420,142,420,136,423,133,449,134,449,134" href="http://radar.weather.gov/radar.php?rid=mrx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Knoxville/Tri Cities, TN Doppler radar" title="Go to the Knoxville/Tri Cities, TN Doppler radar" />
          <area shape="poly" coords="431,154,434,160,425,177,422,176,411,162,424,152,431,154,431,154" href="http://radar.weather.gov/radar.php?rid=ffc&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Atlanta, GA Doppler radar" title="Go to the Atlanta, GA Doppler radar" />
          <area shape="poly" coords="420,176,399,184,412,164,420,176,420,176" href="http://radar.weather.gov/radar.php?rid=mxx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the East Alabama Doppler radar" title="Go to the East Alabama Doppler radar" />
          <area shape="poly" coords="421,177,424,179,428,183,418,192,398,184,421,177,421,177" href="http://radar.weather.gov/radar.php?rid=eox&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Fort Rucker, AL Doppler radar" title="Go to the Fort Rucker, AL Doppler radar" />
          <area shape="poly" coords="427,184,436,207,413,225,415,192,427,184,427,184" href="http://radar.weather.gov/radar.php?rid=tlh&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Tallahassee, FL Doppler radar" title="Go to the Tallahassee, FL Doppler radar" />
          <area shape="poly" coords="446,180,447,183,440,206,436,206,428,184,446,180,446,180" href="http://radar.weather.gov/radar.php?rid=vax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Moody AFB, GA Doppler radar" title="Go to the Moody AFB, GA Doppler radar" />
          <area shape="poly" coords="435,161,445,165,446,168,445,181,428,183,423,178,435,161,435,161" href="http://radar.weather.gov/radar.php?rid=jgx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Robins AFB, GA Doppler radar" title="Go to the Robins AFB, GA Doppler radar" />
          <area shape="poly" coords="433,154,450,138,460,146,444,165,436,160,433,154,433,154" href="http://radar.weather.gov/radar.php?rid=gsp&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Greer, SC Doppler radar" title="Go to the Greer, SC Doppler radar" />
          <area shape="poly" coords="450,239,455,232,522,226,502,259,474,270,450,239,450,239" href="http://radar.weather.gov/radar.php?rid=amx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Miami, FL Doppler radar" title="Go to the Miami, FL Doppler radar" />
          <area shape="poly" coords="451,207,485,195,514,204,525,213,522,225,455,231,451,207,451,207" href="http://radar.weather.gov/radar.php?rid=mlb" alt="Go to the Melbourne, FL Doppler radar" title="Go to the Melbourne, FL Doppler radar" />
          <area shape="poly" coords="484,194,450,208,440,206,448,183,484,194,484,194" href="http://radar.weather.gov/radar.php?rid=jax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Jacksonville, FL Doppler radar" title="Go to the Jacksonville, FL Doppler radar" />
          <area shape="poly" coords="469,167,483,193,449,183,445,180,446,168,469,167,469,167" href="http://radar.weather.gov/radar.php?rid=clx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Charleston, SC Doppler radar" title="Go to the Charleston, SC Doppler radar" />
          <area shape="poly" coords="446,163,460,147,466,149,469,154,469,167,448,168,446,163,446,163" href="http://radar.weather.gov/radar.php?rid=cae&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Columbia, SC Doppler radar" title="Go to the Columbia, SC Doppler radar" />
          <area shape="poly" coords="488,153,513,205,484,193,469,167,469,151,488,153,488,153" href="http://radar.weather.gov/radar.php?rid=ltx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Wilmington, NC Doppler radar" title="Go to the Wilmington, NC Doppler radar" />
          <area shape="poly" coords="438,114,445,104,451,104,466,113,449,134,438,114,438,114" href="http://radar.weather.gov/radar.php?rid=rlx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Charleston, WV Doppler radar" title="Go to the Charleston, WV Doppler radar" />
          <area shape="poly" coords="466,113,473,112,481,123,481,127,465,148,459,145,449,135,466,113,466,113" href="http://radar.weather.gov/radar.php?rid=fcx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Blacksburg, VA Doppler radar" title="Go to the Blacksburg, VA Doppler radar" />
          <area shape="poly" coords="481,128,493,143,488,153,471,152,466,148,481,128,481,128" href="http://radar.weather.gov/radar.php?rid=rax&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Raleigh/Durham, NC Doppler radar" title="Go to the Raleigh/Durham, NC Doppler radar" />
          <area shape="poly" coords="501,119,525,141,493,142,480,125,501,119,501,119" href="http://radar.weather.gov/radar.php?rid=akq&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Wakefield, VA Doppler radar" title="Go to the Wakefield, VA Doppler radar" />
          <area shape="poly" coords="493,143,526,141,563,154,525,212,513,204,488,151,493,143,493,143" href="http://radar.weather.gov/radar.php?rid=mhx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Morehead City, NC Doppler radar" title="Go to the Morehead City, NC Doppler radar" />
          <area shape="poly" coords="473,113,480,106,504,99,502,119,481,126,473,113,473,113" href="http://radar.weather.gov/radar.php?rid=lwx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Sterling, VA Doppler radar" title="Go to the Sterling, VA Doppler radar" />
          <area shape="poly" coords="465,80,475,85,478,103,474,113,466,111,452,104,465,80,465,80" href="http://radar.weather.gov/radar.php?rid=pbz&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Pittsburgh, PA Doppler radar" title="Go to the Pittsburgh, PA Doppler radar" />
          <area shape="poly" coords="456,64,464,79,452,104,444,103,435,92,456,64,456,64" href="http://radar.weather.gov/radar.php?rid=cle&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Cleveland, OH Doppler radar" title="Go to the Cleveland, OH Doppler radar" />
          <area shape="poly" coords="492,80,504,98,478,106,474,87,492,80,492,80" href="http://radar.weather.gov/radar.php?rid=ccx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the State Collegea, PA Doppler radar" title="Go to the State Collegea, PA Doppler radar" />
          <area shape="poly" coords="505,95,564,153,525,140,502,119,505,95,505,95" href="http://radar.weather.gov/radar.php?rid=dox&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Dover AFB, DE Doppler radar" title="Go to the Dover AFB, DE Doppler radar" />
          <area shape="poly" coords="505,98,518,88,524,90,563,150,511,101,505,98,505,98" href="http://radar.weather.gov/radar.php?rid=dix&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Philadelphia, PA Doppler radar" title="Go to the Philadelphia, PA Doppler radar" />
          <area shape="poly" coords="525,87,540,79,577,139,564,153,525,87,525,87" href="http://radar.weather.gov/radar.php?rid=okx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Upton, NY Doppler radar" title="Go to the Upton, NY Doppler radar" />
          <area shape="poly" coords="493,79,495,71,515,75,516,83,518,88,505,99,493,79,493,79" href="http://radar.weather.gov/radar.php?rid=bgm&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Binghamton, NY Doppler radar" title="Go to the Binghamton, NY Doppler radar" />
          <area shape="poly" coords="471,0,475,0,494,69,493,79,474,85,465,80,456,64,455,48,471,0,471,0" href="http://radar.weather.gov/radar.php?rid=buf&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Buffalo, NY Doppler radar" title="Go to the Buffalo, NY Doppler radar" />
          <area shape="poly" coords="522,64,516,74,495,70,475,0,503,0,522,64,522,64" href="http://radar.weather.gov/radar.php?rid=tyx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Montague, NY Doppler radar" title="Go to the Montague, NY Doppler radar" />
          <area shape="poly" coords="522,63,541,73,541,78,523,90,516,83,515,75,522,63,522,63" href="http://radar.weather.gov/radar.php?rid=enx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Albany, NY Doppler radar" title="Go to the Albany, NY Doppler radar" />
          <area shape="poly" coords="503,0,547,0,555,32,546,66,542,73,521,62,503,0,503,0" href="http://radar.weather.gov/radar.php?rid=cxx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Burlington, VT Doppler radar" title="Go to the Burlington, VT Doppler radar" />
          <area shape="poly" coords="542,73,547,68,599,92,577,140,540,79,542,73,542,73" href="http://radar.weather.gov/radar.php?rid=box&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Boston, MA Doppler radar" title="Go to the Boston, MA Doppler radar" />
          <area shape="poly" coords="556,31,600,85,598,91,546,68,556,31,556,31" href="http://radar.weather.gov/radar.php?rid=gyx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Portland, ME Doppler radar" title="Go to the Portland, ME Doppler radar" />
          <area shape="poly" coords="599,0,599,81,555,31,547,0,599,0,599,0" href="http://radar.weather.gov/radar.php?rid=cbw&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Caribou, ME Doppler radar" title="Go to the Caribou, ME Doppler radar" />
          <area shape="poly" coords="355,133,340,141,327,137,322,128,344,114,355,133,355,133" href="http://radar.weather.gov/radar.php?rid=sgf&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Springfield, MO Doppler radar" title="Go to the Springfield, MO Doppler radar" />
          <area shape="poly" coords="394,249,415,223,435,208,440,207,450,209,454,231,447,238,394,249,394,249" href="http://radar.weather.gov/radar.php?rid=tbw&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Tampa Bay Area, FL Doppler radar" title="Go to the Tampa Bay Area, FL Doppler radar" />
          <area shape="poly" coords="394,249,448,238,473,270,383,263,394,249,394,249" href="http://radar.weather.gov/radar.php?rid=byx&amp;product=N0R&amp;overlay=11101111&amp;loop=no" alt="Go to the Key West, FL Doppler radar" title="Go to the Key West, FL Doppler radar" />
        </map>
      </div>
      <div id="Layer2" style="position: absolute; width:100px; height:115px; z-index:3; left: 147px; top: 380px;"> <a href="http://radar.weather.gov/Conus/alaska.php" title="Go to the Alaska sector">Alaska</a><br />
        <a href="http://radar.weather.gov/radar.php?rid=gua&amp;product=N0R&amp;overlay=11101111&amp;loop=no" title="Go to the Guam sector">Guam</a><br/>
        <a href="http://radar.weather.gov/Conus/hawaii.php" title="Go to the Hawaii sector">Hawaii</a><br />
        <a href="http://radar.weather.gov/radar.php?rid=jua" title="Go to the Puerto Rico sector">Puerto
        Rico</a></div>
      <table border="0" align="center" cellpadding="0" cellspacing="1" class="sector">
        <tr align="center">
          <td>&nbsp;</td>
          <td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td><a href="http://radar.weather.gov/radar.php?rid=gua&amp;product=N0R&amp;overlay=11101111&amp;loop=no"><img src="images/sector_guam.gif" alt="Go to the Guam sector" width="53" height="53" border="0" title="Go to the Guam sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/alaska.php"><img src="http://radar.weather.gov/graphics/alaskath.gif" alt="Go to the Alaska sector" width="53" height="53" border="0" title="Go to the Alaska sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/pacnorthwest.php"><img src="http://radar.weather.gov/graphics/pacnorthwestth.gif" alt="Go to the Pacific Northwest sector" width="53" height="53" border="0" title="Go to the Pacific Northwest sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/northrockies.php"><img src="http://radar.weather.gov/graphics/northrockiesth.gif" alt="Go to the Northern Rockies sector" width="53" height="53" border="0" title="Go to the Northern Rockies sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/uppermissvly.php"><img src="http://radar.weather.gov/graphics/uppermissvlyth.gif" alt="Go to the Upper Mississippi Valley sector" width="53" height="53" border="0" title="Go to the Upper Mississippi Valley sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/centgrtlakes.php"><img src="http://radar.weather.gov/graphics/centgrtlakesth.gif" alt="Go to the Central Great Lakes sector" width="53" height="53" border="0" title="Go to the Central Great Lakes sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/northeast.php"><img src="http://radar.weather.gov/graphics/northeastth.gif" alt="Go to the Northeast sector" width="53" height="53" border="0" title="Go to the Northeast sector" /></a></td>
        </tr>
        <tr align="center">
          <td>&nbsp;</td>
          <td><a href="http://radar.weather.gov/radar.php?rid=jua"><img src="images/sector_puerto_rico.gif" alt="Go to the Puerto Rico sector" width="53" height="53" border="0" title="Go to the Puerto Rico sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/hawaii.php"><img src="http://radar.weather.gov/graphics/hawaiith.gif" alt="Go to the Hawaii sector" width="53" height="53" border="0" title="Go to the Hawaii sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/pacsouthwest.php"><img src="http://radar.weather.gov/graphics/pacsouthwestth.gif" alt="Go to the Pacific Southwest sector" width="53" height="53" border="0" title="Go to the Pacific Southwest sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/southrockies.php"><img src="http://radar.weather.gov/graphics/southrockiesth.gif" alt="Go to the Southern Rockies sector" width="53" height="53" border="0" title="Go to the Southern Rockies sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/southplains.php"><img src="http://radar.weather.gov/graphics/southplainsth.gif" alt="Go to the Southern Plains sector" width="53" height="53" border="0" title="Go to the Southern Plains sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/southmissvly.php"><img src="http://radar.weather.gov/graphics/southmissvlyth.gif" alt="Go to the Southern Mississippi Valley sector" width="53" height="53" border="0" title="Go to the Southern Mississippi Valley sector" /></a></td>
          <td><a href="http://radar.weather.gov/Conus/southeast.php"><img src="http://radar.weather.gov/graphics/southeastth.gif" alt="Go to the Southeast sector" width="53" height="53" border="0" title="Go to the Southeast sector" /></a></td>
        </tr>
        <tr align="center">
          <td colspan="9">National Radar Mosaic Sectors<br />
            (click image)</td>
        </tr>
      </table>
      <br />
      <!-- InstanceEndEditable -->
      <!-- end content area --></td>
  </tr>
  <tr>
    <td valign="top">&nbsp;</td>
    <td><!-- start footer -->
      <!-- start footer inc -->
<table width="98%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="3"><hr align="right" width="98%" />
    </td>
  </tr>
  <tr valign="top">
    <td align="left" nowrap="nowrap" class="gray">
	&#160;&#160;&#160;&#160;<a href="http://www.doc.gov"><span class="gray">US Dept of Commerce</span></a><br />
	&#160;&#160;&#160;&#160;<a href="http://www.noaa.gov"><span class="gray">National Oceanic and Atmospheric Administration</span></a><br />
	&#160;&#160;&#160;&#160;National Weather Service<br />
	&#160;&#160;&#160;&#160;1325 East West Highway<br />
	&#160;&#160;&#160;&#160;Silver Spring, MD 20910<br />
	&#160;&#160;&#160;&#160;Page Author: <a href="mailto:w-nws.webmaster@noaa.gov">
	<span class="gray">NWS Internet Services Team</span></a>
	</td>
    <td nowrap="nowrap"><a href="/disclaimer.php"><span class="gray">Disclaimer</span></a><br />
    <a href="http://www.cio.noaa.gov/Policy_Programs/info_quality.html"><span class="gray">Information Quality</span></a><br />
    <a href="/credits.php"><span class="gray">Credits</span></a><br />
    <a href="/glossary/"><span class="gray">Glossary</span></a><br />
	</td>
    <td align="right" nowrap="nowrap"><a href="/privacy.php"><span class="gray">Privacy Policy</span></a><br />
    <a href="http://www.rdc.noaa.gov/%7Efoia/"><span class="gray">Freedom of Information Act (FOIA)</span></a><br />
    <a href="/admin.php"><span class="gray">About Us</span></a><br />
    <a href="/careers.php"><span class="gray">Career Opportunities</span></a>
	</td>
  </tr>
</table>
<!-- end footer inc -->      <!-- end footer -->
      &nbsp;&nbsp;&nbsp;&nbsp; <span class="gray">Page last Modified:</span> <!-- InstanceBeginEditable name="DateLastMod" --> <span class="gray">
      <!-- start modified date -->
      <!-- #BeginDate format:Sw1a -->5 March, 2009 7:08 PM<!-- #EndDate -->
      <!-- end modified date -->
      </span> <!-- InstanceEndEditable --></td>
  </tr>
</table>
</body>
<!-- InstanceEnd -->
</html>
