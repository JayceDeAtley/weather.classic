<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html lang="en">
<a name="top"></a>
<head>
    <title>AHPS Precipitation Analysis</title>
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="STYLESHEET" type="text/css" href="/images/main.css" />
    <meta name="rating" content="General">
    <meta name="keywords" content="AHPS">
    <meta name="DC.title" content="AHPS Precipitation Analysis" />
    <meta name="DC.description" content="Advanced Hydrologic Prediction Service" />
    <meta name="DC.creator" content="US Department of Commerce, NOAA, National Weather Service" />
    <meta name="DC.date.created" scheme="ISO8601" content="2009-03-28" />
    <meta name="DC.date.reviewed" scheme="ISO8601" content="2009-03-28" />
    <meta name="DC.language" scheme="DCTERMS.RFC1766" content="EN-US" />
    <meta http-equiv="expires" content="Sat, 28 Mar 2009 02:36:54 GMT" />
        <script type="text/javascript" language="JavaScript" src="prototype.js"></script>
        <script type="text/javascript" language="JavaScript">
        <!--
        var url
        function changepage(formObject) {
            url = formObject.options[formObject.options.selectedIndex].value;
            if (url != "empty") {
                window.location = url;
                url = "";
            }
        }
        
        function newWin(URL, width, height) {
            // open a new browser window to the URL
            var newWin = window.open(URL, "newWin", "width=" + width + ",height=" + height + ",menu=0,toolbar=1,scrollbars=1,resizable=1");
        }
    
        function prodWin(URL, width, height) {
            // open a new browser window to the URL
            var newWin = window.open(URL, "prodWin", "width=" + width + ",height=" + height + ",menu=0,toolbar=0,scrollbars=0,resizable=0");
        }
        
        function jumpAlert() {
            window.alert('You are now leaving the National Weather Service Web site.\n\nThe NWS provides a link to this external Web page because it may contain related information of interest to you. This link does not constitute an endorsement by the NWS of any information, products or services on this external Web site.\n\nYou can return to the NWS Web site by using the Back button on your Web browser.');
        }
        
        if (top != self) top.location.href = location.href;
        var imageDir = "/images";

        // our JS array of "timeframe" dropdowns
        var arrTimeFrame = new Object();
                arrTimeFrame["current"] = "Today";
        arrTimeFrame["last7days"] = "Last 7 Days";
        arrTimeFrame["last14days"] = "Last 14 Days";
        arrTimeFrame["last30days"] = "Last 30 Days";
        arrTimeFrame["last60days"] = "Last 60 Days";
        arrTimeFrame["last90days"] = "Last 90 Days";
        arrTimeFrame["last180days"] = "Last 180 Days";
        arrTimeFrame["month2date"] = "Month to Date";
        arrTimeFrame["year2date"] = "Year to Date";
        arrTimeFrame["wateryear2date"] = "Water-Year to Date (Oct 1)";

        // our JS array of months
        var arrMonths = new Object();
                arrMonths["1"] = new Object();
        arrMonths["1"]["month"] = "January";
        arrMonths["1"]["days"] = "31";
        arrMonths["2"] = new Object();
        arrMonths["2"]["month"] = "February";
        arrMonths["2"]["days"] = "28";
        arrMonths["3"] = new Object();
        arrMonths["3"]["month"] = "March";
        arrMonths["3"]["days"] = "31";
        arrMonths["4"] = new Object();
        arrMonths["4"]["month"] = "April";
        arrMonths["4"]["days"] = "30";
        arrMonths["5"] = new Object();
        arrMonths["5"]["month"] = "May";
        arrMonths["5"]["days"] = "31";
        arrMonths["6"] = new Object();
        arrMonths["6"]["month"] = "June";
        arrMonths["6"]["days"] = "30";
        arrMonths["7"] = new Object();
        arrMonths["7"]["month"] = "July";
        arrMonths["7"]["days"] = "31";
        arrMonths["8"] = new Object();
        arrMonths["8"]["month"] = "August";
        arrMonths["8"]["days"] = "31";
        arrMonths["9"] = new Object();
        arrMonths["9"]["month"] = "September";
        arrMonths["9"]["days"] = "30";
        arrMonths["10"] = new Object();
        arrMonths["10"]["month"] = "October";
        arrMonths["10"]["days"] = "31";
        arrMonths["11"] = new Object();
        arrMonths["11"]["month"] = "November";
        arrMonths["11"]["days"] = "30";
        arrMonths["12"] = new Object();
        arrMonths["12"]["month"] = "December";
        arrMonths["12"]["days"] = "31";
        arrMonths["13"] = new Object();
        arrMonths["13"]["month"] = "FULL YEAR";
        arrMonths["13"]["days"] = "31";

        // our JS state array
        var arrStates = new Object();
                arrStates["conus"] = "CONUS + Puerto Rico";
        arrStates["stateAL"] = "Alabama";
        arrStates["stateAZ"] = "Arizona";
        arrStates["stateAR"] = "Arkansas";
        arrStates["stateCA"] = "California";
        arrStates["stateCO"] = "Colorado";
        arrStates["stateCT"] = "Connecticut";
        arrStates["stateDE"] = "Delaware";
        arrStates["stateFL"] = "Florida";
        arrStates["stateGA"] = "Georgia";
        arrStates["stateID"] = "Idaho";
        arrStates["stateIL"] = "Illinois";
        arrStates["stateIN"] = "Indiana";
        arrStates["stateIA"] = "Iowa";
        arrStates["stateKS"] = "Kansas";
        arrStates["stateKY"] = "Kentucky";
        arrStates["stateLA"] = "Louisiana";
        arrStates["stateME"] = "Maine";
        arrStates["stateMD"] = "Maryland";
        arrStates["stateMA"] = "Massachusetts";
        arrStates["stateMI"] = "Michigan";
        arrStates["stateMN"] = "Minnesota";
        arrStates["stateMS"] = "Mississippi";
        arrStates["stateMO"] = "Missouri";
        arrStates["stateMT"] = "Montana";
        arrStates["stateNE"] = "Nebraska";
        arrStates["stateNV"] = "Nevada";
        arrStates["stateNH"] = "New Hampshire";
        arrStates["stateNJ"] = "New Jersey";
        arrStates["stateNM"] = "New Mexico";
        arrStates["stateNY"] = "New York";
        arrStates["stateNC"] = "North Carolina";
        arrStates["stateND"] = "North Dakota";
        arrStates["stateOH"] = "Ohio";
        arrStates["stateOK"] = "Oklahoma";
        arrStates["stateOR"] = "Oregon";
        arrStates["statePA"] = "Pennsylvania";
        arrStates["statePR"] = "Puerto Rico";
        arrStates["stateRI"] = "Rhode Island";
        arrStates["stateSC"] = "South Carolina";
        arrStates["stateSD"] = "South Dakota";
        arrStates["stateTN"] = "Tennessee";
        arrStates["stateTX"] = "Texas";
        arrStates["stateUT"] = "Utah";
        arrStates["stateVT"] = "Vermont";
        arrStates["stateVA"] = "Virginia";
        arrStates["stateWA"] = "Washington";
        arrStates["stateWV"] = "West Virginia";
        arrStates["stateWI"] = "Wisconsin";
        arrStates["stateWY"] = "Wyoming";

        // our JS array of regions
        var arrRegions = new Object();
                arrRegions["conus"] = "CONUS + Puerto Rico";
        arrRegions["regionSR"] = "NWS Southern Region";
        arrRegions["regionCR"] = "NWS Central Region";
        arrRegions["regionER"] = "NWS Eastern Region";
        arrRegions["regionWR"] = "NWS Western Region";
        arrRegions["rfcTUA"] = "Arkansas-Red Basin RFC Tulsa, OK";
        arrRegions["rfcRSA"] = "California-Nevada RFC Sacramento, CA";
        arrRegions["rfcSTR"] = "Colorado Basin RFC Salt Lake City, UT";
        arrRegions["rfcORN"] = "Lower Mississippi RFC Slidell, LA";
        arrRegions["rfcRHA"] = "Middle Atlantic RFC State College, PA";
        arrRegions["rfcKRF"] = "Missouri Basin RFC Pleasant Hill, MO";
        arrRegions["rfcMSR"] = "North Central RFC Minneapolis, MN";
        arrRegions["rfcTAR"] = "Northeast RFC Taunton, MA";
        arrRegions["rfcPTR"] = "Northwest RFC Portland, OR";
        arrRegions["rfcTIR"] = "Ohio RFC Wilmington, OH";
        arrRegions["rfcALR"] = "Southeast RFC Peachtree City, GA";
        arrRegions["rfcFWR"] = "West Gulf RFC Ft Worth, TX";

        // our JS array of WFO's (HSA's)
        var arrWFOs = new Object();
                arrWFOs["conus"] = "CONUS + Puerto Rico";
        arrWFOs["wfoABR"] = "Aberdeen, SD (ABR)";
        arrWFOs["wfoALY"] = "Albany, NY (ALY)";
        arrWFOs["wfoABQ"] = "Albuquerque, NM (ABQ)";
        arrWFOs["wfoAMA"] = "Amarillo, TX (AMA)";
        arrWFOs["wfoEWX"] = "Austin/San Antonio, TX (EWX)";
        arrWFOs["wfoLWX"] = "Baltimore/Washington, VA (LWX)";
        arrWFOs["wfoBYZ"] = "Billings, MT (BYZ)";
        arrWFOs["wfoBGM"] = "Binghamton, NY (BGM)";
        arrWFOs["wfoBMX"] = "Birmingham, AL (BMX)";
        arrWFOs["wfoBIS"] = "Bismarck, ND (BIS)";
        arrWFOs["wfoRNK"] = "Blacksburg, VA (RNK)";
        arrWFOs["wfoBOI"] = "Boise, ID (BOI)";
        arrWFOs["wfoBOX"] = "Boston, MA (BOX)";
        arrWFOs["wfoBRO"] = "Brownsville, TX (BRO)";
        arrWFOs["wfoBUF"] = "Buffalo, NY (BUF)";
        arrWFOs["wfoBTV"] = "Burlington, VT (BTV)";
        arrWFOs["wfoCAR"] = "Caribou, ME (CAR)";
        arrWFOs["wfoCHS"] = "Charleston, SC (CHS)";
        arrWFOs["wfoRLX"] = "Charleston, WV (RLX)";
        arrWFOs["wfoCYS"] = "Cheyenne, WY (CYS)";
        arrWFOs["wfoLOT"] = "Chicago, IL (LOT)";
        arrWFOs["wfoCLE"] = "Cleveland, OH (CLE)";
        arrWFOs["wfoCAE"] = "Columbia, SC (CAE)";
        arrWFOs["wfoCRP"] = "Corpus Christi, TX (CRP)";
        arrWFOs["wfoBOU"] = "Denver/Boulder, CO (BOU)";
        arrWFOs["wfoDMX"] = "Des Moines, IA (DMX)";
        arrWFOs["wfoDTX"] = "Detroit/Pontiac, MI (DTX)";
        arrWFOs["wfoDDC"] = "Dodge City, KS (DDC)";
        arrWFOs["wfoDLH"] = "Duluth, MN (DLH)";
        arrWFOs["wfoFGF"] = "Grand Forks, ND (FGF)";
        arrWFOs["wfoEPZ"] = "El Paso, TX (EPZ)";
        arrWFOs["wfoLKN"] = "Elko, NV (LKN)";
        arrWFOs["wfoEKA"] = "Eureka, CA (EKA)";
        arrWFOs["wfoFGZ"] = "Flagstaff, AZ (FGZ)";
        arrWFOs["wfoFWD"] = "Fort Worth, TX (FWD)";
        arrWFOs["wfoAPX"] = "Gaylord, MI (APX)";
        arrWFOs["wfoGGW"] = "Glasgow, MT (GGW)";
        arrWFOs["wfoGLD"] = "Goodland, KS (GLD)";
        arrWFOs["wfoGJT"] = "Grand Junction, CO (GJT)";
        arrWFOs["wfoGRR"] = "Grand Rapids, MI (GRR)";
        arrWFOs["wfoGYX"] = "Gray, ME (GYX)";
        arrWFOs["wfoTFX"] = "Great Falls, MT (TFX)";
        arrWFOs["wfoGRB"] = "Green Bay, WI (GRB)";
        arrWFOs["wfoGSP"] = "Greenville-Spartanburg, SC (GSP)";
        arrWFOs["wfoGID"] = "Hastings, NE (GID)";
        arrWFOs["wfoHGX"] = "Houston/Galveston, TX (HGX)";
        arrWFOs["wfoHUN"] = "Huntsville, AL (HUN)";
        arrWFOs["wfoIND"] = "Indianapolis, IN (IND)";
        arrWFOs["wfoJKL"] = "Jackson, KY (JKL)";
        arrWFOs["wfoJAN"] = "Jackson, MS (JAN)";
        arrWFOs["wfoJAX"] = "Jacksonville, FL (JAX)";
        arrWFOs["wfoKEY"] = "Key West, FL (KEY)";
        arrWFOs["wfoARX"] = "La Crosse, WI (ARX)";
        arrWFOs["wfoLCH"] = "Lake Charles, LA (LCH)";
        arrWFOs["wfoVEF"] = "Las Vegas, NV (VEF)";
        arrWFOs["wfoILX"] = "Lincoln, IL (ILX)";
        arrWFOs["wfoLZK"] = "Little Rock, AR (LZK)";
        arrWFOs["wfoLOX"] = "Los Angeles/Oxnard, CA (LOX)";
        arrWFOs["wfoLMK"] = "Louisville, KY (LMK)";
        arrWFOs["wfoLUB"] = "Lubbock, TX (LUB)";
        arrWFOs["wfoMQT"] = "Marquette, MI (MQT)";
        arrWFOs["wfoMFR"] = "Medford, OR (MFR)";
        arrWFOs["wfoMLB"] = "Melbourne, FL (MLB)";
        arrWFOs["wfoMEG"] = "Memphis, TN (MEG)";
        arrWFOs["wfoMFL"] = "Miami, FL (MFL)";
        arrWFOs["wfoMAF"] = "Midland/Odessa, TX (MAF)";
        arrWFOs["wfoMKX"] = "Milwaukee/Sullivan, WI (MKX)";
        arrWFOs["wfoMSO"] = "Missoula, MT (MSO)";
        arrWFOs["wfoMOB"] = "Mobile, AL (MOB)";
        arrWFOs["wfoMRX"] = "Morristown, TN (MRX)";
        arrWFOs["wfoOHX"] = "Nashville, TN (OHX)";
        arrWFOs["wfoLIX"] = "New Orleans/Baton Rouge, LA (LIX)";
        arrWFOs["wfoMHX"] = "Newport/Morehead City, NC (MHX)";
        arrWFOs["wfoOUN"] = "Norman, OK (OUN)";
        arrWFOs["wfoLBF"] = "North Platte, NE (LBF)";
        arrWFOs["wfoIWX"] = "Northern Indiana, IN (IWX)";
        arrWFOs["wfoOAX"] = "Omaha/Valley, NE (OAX)";
        arrWFOs["wfoPAH"] = "Paducah, KY (PAH)";
        arrWFOs["wfoFFC"] = "Peachtree City/Atlanta, GA (FFC)";
        arrWFOs["wfoPDT"] = "Pendleton, OR (PDT)";
        arrWFOs["wfoPHI"] = "Philadelphia/Mount Holly, NJ (PHI)";
        arrWFOs["wfoPSR"] = "Phoenix, AZ (PSR)";
        arrWFOs["wfoPBZ"] = "Pittsburgh, PA (PBZ)";
        arrWFOs["wfoEAX"] = "Pleasant Hill/Kansas City, MO (EAX)";
        arrWFOs["wfoPIH"] = "Pocatello, ID (PIH)";
        arrWFOs["wfoPQR"] = "Portland, OR (PQR)";
        arrWFOs["wfoPUB"] = "Pueblo, CO (PUB)";
        arrWFOs["wfoDVN"] = "Quad Cities, IA (DVN)";
        arrWFOs["wfoRAH"] = "Raleigh, NC (RAH)";
        arrWFOs["wfoUNR"] = "Rapid City, SD (UNR)";
        arrWFOs["wfoREV"] = "Reno, NV (REV)";
        arrWFOs["wfoRIW"] = "Riverton, WY (RIW)";
        arrWFOs["wfoSTO"] = "Sacramento, CA (STO)";
        arrWFOs["wfoSLC"] = "Salt Lake City, UT (SLC)";
        arrWFOs["wfoSJT"] = "San Angelo, TX (SJT)";
        arrWFOs["wfoSGX"] = "San Diego, CA (SGX)";
        arrWFOs["wfoMTR"] = "San Francisco Bay Area, CA (MTR)";
        arrWFOs["wfoHNX"] = "San Joaquin Valley, CA (HNX)";
        arrWFOs["wfoSJU"] = "San Juan, PR (SJU)";
        arrWFOs["wfoSEW"] = "Seattle, WA (SEW)";
        arrWFOs["wfoSHV"] = "Shreveport, LA (SHV)";
        arrWFOs["wfoFSD"] = "Sioux Falls, SD (FSD)";
        arrWFOs["wfoOTX"] = "Spokane, WA (OTX)";
        arrWFOs["wfoSGF"] = "Springfield, MO (SGF)";
        arrWFOs["wfoLSX"] = "St. Louis, MO (LSX)";
        arrWFOs["wfoCTP"] = "State College, PA (CTP)";
        arrWFOs["wfoTAE"] = "Tallahassee, FL (TAE)";
        arrWFOs["wfoTBW"] = "Tampa Bay Area, FL (TBW)";
        arrWFOs["wfoTOP"] = "Topeka, KS (TOP)";
        arrWFOs["wfoTWC"] = "Tucson, AZ (TWC)";
        arrWFOs["wfoTSA"] = "Tulsa, OK (TSA)";
        arrWFOs["wfoMPX"] = "Twin Cities/Chanhassen, MN (MPX)";
        arrWFOs["wfoOKX"] = "Upton, NY (OKX)";
        arrWFOs["wfoAKQ"] = "Wakefield, VA (AKQ)";
        arrWFOs["wfoICT"] = "Wichita, KS (ICT)";
        arrWFOs["wfoILM"] = "Wilmington, NC (ILM)";
        arrWFOs["wfoILN"] = "Wilmington, OH (ILN)";

        // our js array of available products
        var arrProducts = new Object();
        arrProducts["observed"] = "Observed";
        arrProducts["normal"] = "Normal";
        arrProducts["dep_normal"] = "Departure from Normal";
        arrProducts["per_normal"] = "Percent of Normal";

        // our "current" year, month, and day
        var thisYYYY = 2009;
        var thisMM = 3;
        var thisDD = 27;
        
        // yesterday's year, month, and day
        var yesterYYYY = 2009;
        var yesterMM = 3;
        var yesterDD = 26;

        // starting point
        var startYYYY = 2005;

        var mtime = "";

        // changes the timeframes which are available
        function change_time(radioObject) {
            // first we'll hide all of the choices, then reveal them one-by-one as we figure out what we need
            $("RECENT").style.display = "none";
            $("YM").style.display = "none";
            $("D").style.display = "none";

            // year_select, month_select, day_select
			$("year_select").disabled = "disabled";
			$("month_select").disabled = "disabled";
			$("day_select").disabled = "disabled";
            // find out which inputs we need to show and show them
            var _which = radioObject.value;
            
			if(_which == "D")
			{
				$("YM").style.display = "";
				$("year_select").disabled = false;
				$("month_select").disabled = false;
				$("day_select").disabled = false;
			}
			else if (_which == "YM")
			{
				$("year_select").disabled = false;
				$("month_select").disabled = false;
			}
            $(_which).style.display = "";


            // because we are changing the available options, we should check the date and load new images
            change_product(radioObject.value);
            check_date();
            change_images("percentage");
        }

        // we need to make sure you can't select certain products if they aren't valid
        function change_product(timeframe) {
            var _prodOpts = $("prod_select").options;
            if(timeframe == "D" || (timeframe == "RECENT" && $("tf_recent").selectedIndex == 0)) {
                _prodOpts.length = 1;
                $("prod_observed").selected = true;
            }
            else {
                if(_prodOpts.length == 4) return;
                _prodOpts[1] = new Option("Normal", "normal");
                _prodOpts[2] = new Option("Departure from Normal", "dep_normal");
                _prodOpts[3] = new Option("Percent of Normal", "per_normal");
            }
        }

        function change_locs(radioObject, loc) {
            var _selectedIndex = 0;
            if(radioObject.value == "STATE")
                var _whichArray = eval("arrStates");
            else if(radioObject.value == "NWS")
                var _whichArray = eval("arrRegions");
            else
                var _whichArray = eval("arrWFOs");

            var _opts = $("loc_select").options;
            _opts.length = 0;
            var _index = 0;
            for(_key in _whichArray) {
                _opts[_index] = new Option(_whichArray[_key], _key);
                if(loc && _key == loc) _selectedIndex = _index;
                _index++;
            }
            _opts[_selectedIndex].selected = true;
            change_images("loc");
        }

        function check_date() {
            // we don't need to do anything if we aren't working with dates
            if($("recent_radio").checked) return;
            var _isYM = $("ym_radio").checked;

            var _oYear = $("year_select").options;
            var _oMonth = $("month_select").options;
            var _oDay = $("day_select").options;
            var _myYYYY = _oYear[$("year_select").selectedIndex].value;
            var _myMM = _oMonth[$("month_select").selectedIndex].value;
            var _myDD = _oDay[$("day_select").selectedIndex].value;

            var _monthControl = 12;
            var _yearControl = thisYYYY;
            // if we're looking at this year, let's set the months correctly.
            if(parseInt(_myYYYY) == thisYYYY) _monthControl = thisMM;


/*
            // begin YM ninja magic
            // (i know it's a bad comment.)
            if(_isYM && thisDD == 1) {
                if(thisMM == 1) {
                    _yearControl--;
                    if(parseInt(_myYYYY) == thisYYYY) {
                        _myYYYY--;
                        _monthControl = 12;
                    }
                }
                else 
                    _monthControl--;
            }
            // end the magic
*/
			// If we are on the Archive: Month/Year select and the current day is 1
			if (_isYM) 
			{
				// And if our current month (not selected month) is January 
				if (thisMM == 1)
				{
					// Then we don't really have an archive for this year yet so turn back the clock
					_yearControl--;
					// So if the selected year equals this year...
					if (parseInt(_myYYYY) == thisYYYY)
					{
						// ...we are going to re-select December of the last year, because that's the latest archive month/year
						_myYYYY--;
						_monthControl = 12;
					}
				}
				// Otherwise, if we aren't in January but we have selected our current year...
				// ...we don't have an archive for the current month so back it up one.
				else if (parseInt(_myYYYY) == thisYYYY)
				{
					_monthControl--;
				}	
			}

            // add the years
            _oYear.length = 0;
            var _yearIndex = 0;
            for(var _year = startYYYY; _year <= _yearControl; _year++) {
                _oYear[_yearIndex] = new Option(_year, _year);
                if(_year == _myYYYY)
                    _oYear[_yearIndex].selected = true;
                _yearIndex++;
            }

            // add the months
            _oMonth.length = 0;
            for(var _month = 1; _month <= _monthControl; _month++) 
	    	{
                _oMonth[_month - 1] = new Option(arrMonths[_month]["month"], _month); 
	    	}

            // reset the user's selection if it's no longer valid
            if(parseInt(_myMM) > _monthControl) {
                if(parseInt(_myMM) == 13 && _isYM && parseInt(_myYYYY) != thisYYYY) _myMM = 13;
                else _myMM = _monthControl;
            }

            var _dayControl = arrMonths[_myMM]["days"];
            if(parseInt(_myMM) == 2 && (thisYYYY % 4 == 0)) _dayControl++;
            // if we're looking at this month, let's set the days correctly.
            if(parseInt(_myYYYY) == thisYYYY && parseInt(_myMM) == thisMM) _dayControl = thisDD;
            
            // add the days
            _oDay.length = 0;
            for(var _day = 1; _day <= _dayControl; _day++)
                _oDay[_day - 1] = new Option(_day, _day);
            
            // reset the user's selection if it's no longer valid
            if(parseInt(_myDD) > _dayControl) _myDD = _dayControl;

            // add the "FULL YEAR" option if it's missing
            if(_isYM && parseInt(_myYYYY) != thisYYYY && _oMonth.length == 12)
                _oMonth[12] = new Option(arrMonths[13]["month"], 13);

            // remove the "FULL YEAR" option if it's not needed
            else if(!_isYM && _myYYYY != thisYYYY && _oMonth.length == 13) {
                if(parseInt(_myMM) == 13)
                    _myMM = 12;
                _oMonth.length = 12;
            }

            _oMonth[_myMM - 1].selected = true;
            if(!_isYM) _oDay[_myDD - 1].selected = true;

            $("titletext").innerHTML = build_title();
        }

        // returns the selected value in a <select> list
        function get_selected_value(objID) {
            var _obj = $(objID);
            return _obj.options[_obj.selectedIndex].value;
        }

        // Called when images are changed so that the title stays relevant
        function build_title() {
            var _text = "&nbsp;";

            if($("state_radio").checked)
                _text += arrStates[get_selected_value("loc_select")] + ": ";
            else if($("nws_radio").checked)
                _text += arrRegions[get_selected_value("loc_select")] + ": ";
            else
                _text += arrWFOs[get_selected_value("loc_select")] + ": ";

            if($("recent_radio").checked) {
                _text += "Current ";
                switch(get_selected_value("tf_recent")) {
                    case "current": _text += "1-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last7days": _text += "7-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last14days": _text += "14-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last30days": _text += "30-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last60days": _text += "60-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last90days": _text += "90-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "last180days": _text += "180-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "month2date": _text += "Month to Date " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "year2date": _text += "Year to Date " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                    case "wateryear2date": _text += "Water-Year (Oct 1) " + arrProducts[get_selected_value("prod_select")] + " Precipitation"; break;
                }
            }
            else if($("ym_radio").checked) {
                if(get_selected_value("month_select") == 13)
                    _text += "Full Year " + get_selected_value("year_select") + " " + arrProducts[get_selected_value("prod_select")] + " Precipitation";
                else {
                    _text += arrMonths[get_selected_value("month_select")]["month"] + ", " + get_selected_value("year_select") + " Monthly ";
                    _text += arrProducts[get_selected_value("prod_select")] + " Precipitation";
                }
            }
            else {
                _text += get_selected_value("month_select") + "/" + get_selected_value("day_select") + "/" + get_selected_value("year_select") + " ";
                _text += "1-Day " + arrProducts[get_selected_value("prod_select")] + " Precipitation";
            }

            return _text + "<br />&nbsp;" + mtime;
        }

        var imagesNeeded = 0;
        var imagesDownloaded = 0;
        var imageArray = new Object();

        function change_images(type) {
            imagesNeeded = 0;
            imagesDownloaded = 0;
            imageArray = new Object();

            switch(type) {
                case "all":
                case "loc":
                    $("titletext").innerHTML = "&nbsp;Loading...<br />&nbsp;Please Wait";
                    if($("checkbox0").checked) get_image("image0");
                    if($("checkbox2").checked) get_image("image2");
                    if($("checkbox3").checked) get_image("image3");
                    if($("checkbox4").checked) get_image("image4");
                    if($("checkbox5").checked) get_image("image5");
                    if($("checkbox6").checked) get_image("image6");
                    get_image("image8");

                case "percentage":
                    if($("checkbox1").checked) get_image("image1");
                    get_image("image7");
                    break;

                case "units": 
                    get_image("image7");
                    break;
            }                    
        }
        
        function get_image(type) {
            imagesNeeded++;
            var _qry = "";
            switch(type) {
                case "image0":
                    _qry = "image=image0&loc=" + get_selected_value("loc_select");
                    break;

                case "image1":
                    _qry = "image=image1";
                    if($("d_radio").checked)
                        _qry += "&d=1&month=" + get_selected_value("month_select") + "&day=" + get_selected_value("day_select");
                    else if($("recent_radio").checked) {
                        _qry += "&recent=1&month=" + thisMM + "&day=" + thisDD + "&timeframe=" + get_selected_value("tf_recent");
                    }
                    else {
                        if(get_selected_value("month_select") == 13)
                            _qry += "&fullyear=1";
                        else {
                            _qry += "&month=" + get_selected_value("month_select") + "&day=" + thisDD;
                            if(get_selected_value("month_select") == thisMM && get_selected_value("year_select") == thisYYYY)
                                _qry += "&current_month=1";
                        }
                    }
                    _qry += "&loc=" + get_selected_value("loc_select") + "&prod=" + get_selected_value("prod_select") + "&year=";
                    _qry += ($("recent_radio").checked ? thisYYYY : get_selected_value("year_select"));
                    break;

                case "image2":
                    _qry = "image=image2&loc=" + get_selected_value("loc_select");
                    break;

                case "image3":
                    _qry = "image=image3&loc=" + get_selected_value("loc_select");
                    break;

                case "image4":
                    _qry = "image=image4&loc=" + get_selected_value("loc_select");
                    break;

                case "image5":
                    _qry = "image=image5&loc=" + get_selected_value("loc_select");
                    break;

                case "image6":
                    _qry = "image=image6&loc=" + get_selected_value("loc_select");
                    break;

                case "image7":
                    var _timeType;
                    if($("ym_radio").checked) {
                        if(get_selected_value("month_select") == 13) _timeType = 365;
                        else _timeType = 31;
                    }
                    else if($("d_radio").checked) _timeType = 1;
                    else {
                        switch(get_selected_value("tf_recent")) {
                            case "current":
                                _timeType = 1;
                                break;
                            case "last7days":
                            case "last14days":
                            case "last30days":
                            case "month2date":
                                _timeType = 31;
                                break;
                            case "last60days":
                            case "last90days":
                                _timeType = 90;
                                break;
                            case "last180days":
                            case "year2date":
                            case "wateryear2date":
                                _timeType = 365;
                                break;
                        }
                    }
                        
                    var _product;
                    switch(get_selected_value("prod_select")) {
                        case "observed":
                        case "normal":
                            _product = "obs";
                            break;
                        case "dep_normal":
                            _product = "dif";
                            break;
                        case "per_normal":
                            _product = "percent";
                            break;
                    }
                            
                    var _metric = ($("metric_radio").checked ? "1" : "0");

                    _qry = "image=image7&timetype=" + _timeType + "&metric=" + _metric + "&product=" + _product;
                    break;

                case "image8":
                    if($("wfo_radio").checked) maptype = "wfobounds";
                    else if($("state_radio").checked) maptype = "states";
                    else if($("nws_radio").checked) maptype = "rfcbounds";
                    var _loc = get_selected_value("loc_select");
                    _qry = "image=image8&maptype=" + maptype + "&loc=" + _loc;
                    break;
            }

            do_ajax_request(type, _qry);
        }

        function do_ajax_request(type, query) {
            new Ajax.Request('return_image_url.php', {
                method:         'get',
                parameters:     query,
                onSuccess:      function(transport) {
                    load_image(transport.responseText);
                }
            });
        }

        // called once the ajax request returns the image's URL to us
        function load_image(url_string) {
            var _array = url_string.split("!");
            var _image = _array[1];

            // is this an image map? if so, we need to do something completely different
            if(_image == "image8") {
                var _maptype = _array[0];
                var _areaList = _array[2];
                image_downloaded(_image);
                cur_imap = _areaList;
                load_imagemap();
                return;
            }

            var _temp_mtime = _array[0];
            var _url = _array[2];

            imageArray[_image] = new Image();
            imageArray[_image].onload = function() { image_downloaded(_image); }
            imageArray[_image].onerror = function() { image_downloaded(_image); }
            imageArray[_image].src = _url;

            if(_image == 'image1') {
                mtime = _temp_mtime;
                var _loading = /Loading/;
                if(!_loading.test($("titletext").innerHTML))
                    $("titletext").innerHTML = build_title();
            }
        }

        // sets/unsets layer visibility, checks to see if image is available
        function toggle_layer(obj, checked) {
            if(!checked) {
                var _imgDiv = $("image" + obj.value);
                Element.hide(_imgDiv);
            }
            else {
                var _imgNum = obj.value;
                imageArray = new Object();
                imagesNeeded = 0;
                imagesDownloaded = 0;
                get_image("image" + _imgNum);
            }
        }

        // called when an image is pulled down
        function image_downloaded(str) {
            imagesDownloaded++;

            if(imagesNeeded == imagesDownloaded) {
                for(key in imageArray) {
                    $(key).childNodes[0].src = imageArray[key].src;
                    Element.show(key);
                }
                $("titletext").innerHTML = build_title();
            }
        }

        var cur_imap;
        // load the new image map into the page
        function load_imagemap() {
            var _areaList = cur_imap;

            if($("img8").getAttribute("usemap")) {
                $("img8").removeAttribute("usemap");
                Element.hide($("img8"));
            }

            if(_areaList == false) 
                return;

            var _map = $("imap0");
            var _length = _map.childNodes.length;
            for(ix = 0; ix < _length; ix++) 
                _map.removeChild(_map.childNodes[0]);

            _areaList = _areaList.split("\n");
            var _area, _href, _tabindex, _shape, _coords, _title;
            var _areaRE = /area/;
            var _hrefRE = /\?loctype=(\w+)&loc=(\w+)/;
            var _tabindexRE = /tabindex="(\d+)"/;
            var _shapeRE = /shape="(\w+)"/;
            var _coordsRE = /coords="([^"]+)"/;
            var _titleRE = /title="([^"]+)"/;

            for(_ix in _areaList) {
                _area = _areaList[_ix];
                if(!_areaRE.test(_area))
                    continue;

                var _href = _hrefRE.exec(_area);
                var _tabindex = _tabindexRE.exec(_area);
                var _shape = _shapeRE.exec(_area);
                var _coords = _coordsRE.exec(_area);
                var _title = _titleRE.exec(_area);

                var _new_area = document.createElement("area");
                _new_area.setAttribute("href", "index_nonjs.php?loctype=" + _href[1] + "&loc=" + _href[2]);
                _new_area.setAttribute("tabindex", _tabindex[1]);
                _new_area.setAttribute("shape", _shape[1]);
                _new_area.setAttribute("coords", _coords[1]);
                _new_area.setAttribute("alt", _title[1]);
                _new_area.setAttribute("title", _title[1]);
                _new_area.onclick = imgmap_click;

                _map.appendChild(_new_area);
            }

            $("imagesection").appendChild(_map);
            $("img8").setAttribute("usemap", "#imap0");
            Element.show("img8");
        }

        // the image maps do NOT have js by default.
        // we must add this functionality to each <area> element.
        function imgmap_add_js() {
            var _map = $("imap0");

            for(ix = 0; ix < _map.childNodes.length; ix++) 
                _map.childNodes[ix].onclick = imgmap_click;
        }

        // an area has been clicked. let's create some RE's
        // and switch to the new location.
        var locRE = /loc=(\w+)/;
        var typeRE = /loctype=(\w+)/;
        function imgmap_click() {
            // get the type. is it a state or RFC?
            var _type = typeRE.exec(this.href);
            _type = _type[1];
            
            // get the loc.
            var _loc = locRE.exec(this.href);
            _loc = _loc[1];

            // change everything.
            if(_type == "STATE")
                var _radioObj = $("state_radio");
            else if(_type == "NWS")
                var _radioObj = $("nws_radio");
            else if(_type == "WFO")
                var _radioObj = $("wfo_radio");
            _radioObj.checked = true;
            change_locs(_radioObj, _loc);

            // cancel the default action by returning false.
            return false;
        }

        function conus_click() {
            var _radioObj;
            if($("state_radio").checked)
                _radioObj = $("state_radio");
            else if($("nws_radio").checked)
                _radioObj = $("nws_radio");
            else if($("wfo_radio").checked)
                _radioObj = $("wfo_radio");
            change_locs(_radioObj, "conus");
        }

                //-->
        </script>
            <link href="/images/layers.css" type="text/css" rel="stylesheet" />
    <style type="text/css">
    div#basemap { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image0 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image1 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image2 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image3 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image4 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image5 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image6 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    div#image7 { position: absolute; left: 570px; top: 5px; height: 306px; width: 46px; }
    div#image8 { position: absolute; left: 5px; top: 5px; height: 306px; width: 560px; }
    DIV#imgPrint { position: absolute; left: 5px; top: 5px; }
    div#content { position:relative; border: 2px 2px 2px 2px #000000; }
    div#datasection {
    	position: absolute;
    	width: 621px;
        left: 0px;
        top: 0px;
        border-left: 2px #000000;
    }
    
    div#tabtitle {
    	position: absolute;
    	width: 621px;
    	height: 31px;
        left: 0px;
        top: 0px;
    	background-color:#0a2390;
    	text-align:center;
    	vertical-align:bottom;
    	font: 16px verdana, sans-serif; 
        border-left: 3px solid #99ff00;
    }
    
    div#titletext {
    	position: absolute;
    	width: 621px;
    	height: 31px;
        left: 5px;
        top: 0px;
    	color:White;
    	background-color:#0a2390;
    	text-align:left;
    	vertical-align:bottom;
    	font: 10px verdana, sans-serif; 
    	font-weight:bold;
        padding-top: 3px;
    }
    
    div#instruction {
    	position: absolute;
    	width: 200px;
    	height: 31px;
        left: 525px;
        top: 0px;
    	color:White;
    	background-color:#0a2390;
    	text-align:right;
    	vertical-align:bottom;
    	font: 14px times new roman; 
    	font-style:italic;
    }
    
    div#imagesection {
    	position: absolute;
    	left: 5px;
    	top: 31px;
    	height: 316px;
    	width: 621px;
    	background-color: #0a2390;
    }
    
    div#overlays {
    	position: absolute;
    	left: 5px;
    	top: 346px;
    	width: 621px;
    	background-color:#0a2390;
    	text-align:center;
    	color:White;
    	font-size:11px;
    }
    
    div#interface {
    	position: absolute;
    	left: 5px;
    	top: 366px;
    	width: 621px;
    	font-size:11px;
    	background-color: #eaedff;
    }
    
    div#about {
    	position: absolute;
    	left: 5px;
    	top: 31px;
    	width: 616px;
    	background-color: #eaedff;
    }
    
    .yellow { 
    	font-weight:bold;
    	color : #F0E68C; 
    }
    
    .white {
    	color: White;
    	font-weight: bold;
    }
    
    .red {
    	color: Red;
    }
    
    .green {
    	color: green;
    }
    
    .blue {
    	color: Navy;
    }
    
    .ltblue {
    	color: #B0E0E6;
    	font-weight: bold;
    }
    
    .gray {
    	color: GrayText;
    	font-weight : normal;
    }
    
    .gray a, .gray a:visited {
    	color: GrayText;
    	text-decoration: none;
    }
    
    .gray a:hover {
     	color: #FF0000;
     	text-decoration: underline;
    }
    .gray1 {
    	color: GrayText;
    	font-size: 10px;
    }
    
    form {
    	display: inline;
    }
    
    select.interface {
    	font-size: 9px;
    }
    
    select.timeframe {
    	font-size: 9px;
        width: 200px;
    }
    
    th.interface {
    	text-align:left;
    }
    
    h1 {
    	font-size:14px;
    	font-family:Arial, Helvetica, sans-serif;
    }
    
    p, li {
    	font-family:Arial, Helvetica, sans-serif;
    	font-size:12px;
    }
    
    dfn {
    	font-style:normal;
    	cursor: help;
    }
    </style>
    <!--[if lt IE 7]>
    <style type="text/css">
    /* our IE PNG fix */
    img {
        behavior: url("pngbehavior.htc");
    }
    </style>
    <![endif]-->
        </head>

<body leftmargin="0" topmargin="0" rightmargin="0" marginwidth="0" marginheight="0">

<table cellspacing="0" cellpadding="0" border="0" width="100%" background="/images/topbanner.jpg">
<tr>
    <td scope="col" align="right" height="19"><a href="#content"><img src="/images/skipgraphic.gif" alt="Skip Navigation Link" width="1" height="1" border="0" /></a><a href="http://www.weather.gov"><span class="nwslink">weather.gov</span></a>&nbsp;</td>
</tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
<tr>
    <td scope="col" rowspan="2"><a href="http://www.noaa.gov"><img src="/images/noaaleft.jpg" alt="NOAA logo - Click to go to the NOAA homepage" width="85" height="78" border="0" /></a></td>
    <td scope="col" align="left"><img src="/images/nws_title.jpg" alt="National Weather Service" width="500" height="20" border="0" /></td>
    <td scope="col" rowspan="2" width="100%" background="/images/wfo_bkgrnd.jpg">&nbsp;</td>
    <td scope="col" rowspan="2" align="right"><a href="http://www.nws.noaa.gov"><img src="/images/nwsright.jpg" alt="NWS logo - Click to go to the NWS homepage" width="85" height="78" border="0"></a></td>
</tr>
<tr>
    <td scope="col"><a href="http://www.weather.gov/ahps/">
    <img src="/images/ahps_name.jpg" alt="Advanced Hydrologic Prediction Service" width="500" height="58" border="0" /></a></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" border="0" background="/images/navbkgrnd.gif" width="100%">
<tr>
    <td scope="col" align="left" valign="top" width="94"><img src="/images/navbarleft.jpg" alt="" width="94" height="23" border="0" /></td>
    <td scope="col" class="nav" width="15%" align="center" id="menuitem" nowrap><a href=""><b>Home</b></a></td>
    <td scope="col" class="nav" width="15%" align="center" id="menuitem"><a href="http://www.weather.gov/pa/"><b>News</b></a></td>
    <td scope="col" class="nav" width="20%" align="center" id="menuitem"><a href="http://www.weather.gov/organization.php"><b>Organization</b></a></td>
    <td scope="col" align="right" class="searchinput" width="20%" nowrap="nowrap">
    <form method="get" action="http://firstgovsearch.gov/search" style="margin-bottom:0; margin-top:0;">
    <label for="query" span class="yellow">Search for:</span>&nbsp;&nbsp;</label>
    <input type="hidden" name="v:project" value="firstgov" />
    <input name="query" type="text" value="" size="10" maxlength="256" id="query"/>
    <input type="radio" name="affiliate" checked="checked" value="nws.noaa.gov" id="nws" />
    <label for="nws" class="yellow">NWS</label>
    <input type="radio" name="affiliate" value="noaa.gov" id="noaa" />
    <label for="noaa" class="yellow">All NOAA</label>
    <input type="submit" value="Go" />
    </form>
    </td>
    <td scope="col" align="right" valign="bottom"><img src="/images/navbarendcap.jpg" alt="" width="24" height="23" border="0" /></td>
</tr>
</table>

<table cellspacing="0" cellpadding="1" border="0" width="750">
<tr valign="top">
    <td scope="col" width="125" bgcolor="#0A2390" valign="top"><br />

    <table cellspacing="0" cellpadding="2" border="0" width="125">
    <tr align="center" valign="top">
        <td scope="col" class="searchinput"><div id="Layer2" style="position:absolute; width:200px; height:115px; z-index:2; visibility: hidden">Search by city or zip code. Press enter or select the go button to submit request</div><form method="POST" action="http://www.srh.noaa.gov/zipcity.php"><label for="city-search" class="yellow">Local weather forecast by<br />&quot;City, ST&quot;</label><br /><input type="text" id="city-search" name="inputstring" size="10" value="City, ST">&nbsp;&nbsp;<input type="submit" name="Go2" value="Go"></form></td>
    </tr>
    <!--end City/State Forecast Code -->
    <tr>
    <td class="white" id="menuitem">&nbsp;<a href="http://www.weather.gov/rss/"><img src="http://www.weather.gov/images/xml.gif" alt="RSS Feeds" title="RSS Feeds" width="36" height="14" border="0" /> RSS
        Feeds</a><br />
      <a href="http://www.weather.gov/warnings.php"><span class="yellow">Warnings<br />
      </span></a> &nbsp;<a href="http://www.weather.gov/view/nationalwarnings.php?map=on">Current</a> <br />
      &nbsp;<a href="http://www.weather.gov/alerts/">By State/County...</a> &nbsp;<a href="http://www.cpc.ncep.noaa.gov/products/stratosphere/uv_index/uv_alert.shtml">UV
      Alerts</a><br />
    </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/observations.php"><span class="yellow">Observations<br />
      </span></a> &nbsp;<a href="http://www.weather.gov/radar_tab.php">Radar</a><br />
      &nbsp;<a href="http://www.goes.noaa.gov/">Satellite</a><br />
      &nbsp;<a href="http://www.nohrsc.nws.gov/">Snow Cover</a><br />
      &nbsp;<a href="http://www.weather.gov/om/osd/portal.shtml">Surface Weather...</a><br />
      &nbsp;<a href="http://water.weather.gov/">Observed Precip</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/forecasts.php"><span class="yellow">Forecasts</span></a><br />
      &nbsp;<a href="http://www.weather.gov/organization.php">Local</a><br />
      &nbsp;<a href="http://www.weather.gov/forecasts/graphical/">Graphical</a><br />
      &nbsp;<a href="http://aviationweather.gov/">Aviation</a><br />
      &nbsp;<a href="http://www.weather.gov/om/marine/home.htm">Marine</a><br />
      &nbsp;<a href="http://www.nhc.noaa.gov/">Hurricanes</a><br />
      &nbsp;<a href="http://www.spc.noaa.gov/">Severe Weather</a><br />
      &nbsp;<a href="http://www.spc.noaa.gov/products/fire_wx/">Fire Weather</a> </td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><span class="yellow">Text Messages</span><br />
      &nbsp;<a href="http://www.weather.gov/view/states.php">By State</a><br />
      &nbsp;<a href="http://www.weather.gov/view/validProds.php">By Message Type</a><br />
      &nbsp;<a href="http://www.weather.gov/view/national.php?map=on">National</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/maps.php"><span class="yellow">Forecast
          Models</span></a><br />
      &nbsp;<a href="http://www.nco.ncep.noaa.gov/pmb/nwprod/analysis/">Numerical
      Models</a><br />
      &nbsp;<a href="http://www.nws.noaa.gov/mdl/synop/products.shtml">Statistical
      Models...</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><span class="yellow">Climate</span><br />
      &nbsp;<a href="http://www.weather.gov/climate/">Past Weather</a><br />
      &nbsp;<a href="http://www.weather.gov/predictions.php">Predictions</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/safety.php"><span class="yellow">Weather
          Safety</span></a><br />
      &nbsp;<a href="http://www.weather.gov/nwr/">Weather Radio</a><br />
      &nbsp;<a href="http://www.cpc.noaa.gov/products/expert_assessment/threats.html">Hazard
      Assmt...</a><br />
      &nbsp;<a href="http://www.stormready.noaa.gov/">StormReady</a>&nbsp;/<br />
      &nbsp;<a href="http://www.stormready.noaa.gov/tsunamiready/">TsunamiReady</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/education.php"><span class="yellow">Education/Outreach</span></a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/information_center.php"><span class="yellow">Information
          Center</span></a><br />
      &nbsp;<a href="http://tsunami.gov/">Tsunamis</a><br />
      &nbsp;<a href="http://www.weather.gov/om/publications.shtml">Publications...</a></td>
  </tr>
  <tr>
    <td class="white" id="menuitem"><a href="http://www.weather.gov/feedback.php"><span class="yellow">Contact
          Us</span></a><br />
      &nbsp;<a href="http://www.weather.gov/pa/faq.php">FAQ</a><br />
      &nbsp;<a href="http://www.weather.gov/feedback.php">Comments...</a></td>
  </tr>    <tr>
        <td scope="col" align="center" class="white" id="menuitem" nowrap><br />
        <a href="http://www.usa.gov/" title="USA.gov Web Portal"><img src="/images/usagov_logo_color_110w.gif" width="110" height="30" alt="USA.gov Web Portal" border="0" /></a>
        </td>
    </tr>
    </table>

    </td>
    <a name="content"></a>
    <td scope="col" width="5">&nbsp;</td>
    <td scope="col" align="left" valign="top" width="600">
    <!--- begin specific page content --->
            
    
    <br />
    National Hydrologic Assessment Available - High and Imminent Risk of Flooding in Red River of the North Basin. <a href="http://www.weather.gov/hic/nho">Details...</a>
<p />
    
    <!-- redirect them if JavaScript is turned off -->
    <noscript>
        <meta http-equiv="refresh" content="0; url=index_nonjs.php" />
    </noscript>
    
    <!-- start basic tabs -->
    <table width="626" border="0" cellspacing="0" cellpadding="0" name="Tabs">
    <tr>
        <td scope="col" width="5">&nbsp;</td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" width="14%" align="center" background="/images/tab_middle.off.jpg" title="Warnings &amp; Forecasts"><a href="http://www.weather.gov/" title="Warnings &amp; Forecasts">Warnings &amp; Forecasts</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" width="14%" align="center" background="/images/tab_middle.off.jpg" title="Graphical Forecasts"><a href="http://www.weather.gov/forecasts/graphical/" title="Graphical Forecasts">Graphical Forecasts</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" width="14%" align="center" background="/images/tab_middle.off.jpg" title="National Maps"><a href="http://www.weather.gov/outlook_tab.php" title="National Maps">National Maps</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="Radar"><a href="http://www.weather.gov/radar_tab.php" title="Radar">Radar</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.on.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.on.jpg" title="Water"><a href="http://www.weather.gov/ahps" title="Water">Water</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.on.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="Air Quality"><a href="http://www.weather.gov/aq/" title="Air Quality">Air Quality</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="Satellite"><a href="http://www.weather.gov/sat_tab.php" title="Satellite">Satellite</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="Climate"><a href="http://www.weather.gov/climate/" title="Climate">Climate</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
    </tr>
    </table>
    <!-- end basic tabs -->
    
    <!-- start sub tabs -->
    <table width="626" border="0" cellspacing="0" cellpadding="0" name="Tabs">
    <tr>
        <td scope="col" width="5">&nbsp;</td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="River Observations"><a href="http://www.weather.gov/ahps/index.php" title="River Observations">River Observations</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="River Forecasts"><a href="http://www.weather.gov/ahps/forecasts.php" title="River Forecasts">River Forecasts</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.on.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.on.jpg" title="Precipitation">Precipitation</td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.on.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="River Download"><a href="http://www.weather.gov/ahps/download.php" title="River Download">River Download</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt=" " width="3" height="34" /></td>
        <td scope="col" align="center" background="/images/tab_middle.off.jpg" title="Other Information"><a href="http://www.weather.gov/ahps/other.php" title="Other Information">Other Information</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt=" " width="4" height="34" /></td>
    </tr>
    <tr>
        <td scope="col">&nbsp;</td>
        <td scope="col" colspan="15"><hr color="#0A2390" noshade width="100%" /></td>
    </tr>
    </table>
    <!-- end sub tabs -->
    
    
    
    <!--- start our precip tabs table --->
    <table width="626" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td scope="col" width="5">&nbsp;</td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.on.jpg" alt="" width="3" height="34" /></td>
        <td scope="col" background="/images/tab_middle.on.jpg" align="center" title="Images">Images</td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.on.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" width="4" align="right"><img src="/images/tab_left.off.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" background="/images/tab_middle.off.jpg" align="center" title="Download" nowrap><a href="download.php" title="Download">Download</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
        <td scope="col" background="/images/tab_middle.off.jpg" align="center" title="About NWS Precip Analysis"><a href="about.php" title="About NWS Precip Analysis">About NWS<br />Precip Analysis</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
        <td scope="col" background="/images/tab_middle.off.jpg" align="center" title="Other Useful Information"><a href="other.php" title="Other Useful Information">Other Useful<br />Information</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
        <td scope="col" background="/images/tab_middle.off.jpg" align="center" title="Survey &amp; Feedback"><a href="feedback.php" title="Survey &amp; Feedback">Survey &amp;<br />Feedback</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
        <td scope="col" width="3" align="right"><img src="/images/tab_left.off.jpg" alt="" width="3" height="34" /></td>
        <td scope="col" background="/images/tab_middle.off.jpg" align="center" title="Regional / RFC Precip Data"><a href="rfc.php" title="Regional / RFC Precip Data">Regional / RFC<br />Precip Data</a></td>
        <td scope="col" width="4" align="left"><img src="/images/tab_right.off.jpg" alt="" width="4" height="34" /></td>
    </tr>
    </table>
    <!--- end our tabs table --->
    
    <div id="content">
    <img name="img32" style="z-index:32" src="/images/spacer.gif" width="1" height="630" border="0" alt="" />
    <div id="datasection">
    <div id="titletext">&nbsp;CONUS + Puerto Rico: Current 1-Day Observed Precipitation<br />&nbsp;Valid at 3/27/2009 1200 UTC - Created 3/27/09 22:36 UTC</div>
    <!--- <div id="instruction">Click on the image to zoom in<br>Click on "States" to zoom out</div> --->
    <div id="imagesection">
        <div id="basemap"><img name="basemap" style="z-index: 0;" src="/images/black.gif" width="560" height="306" alt="" /></div>
                        <div id="image0"><img name="img0" style="z-index:0" width="560" height="306" src="/images/geolayers/land/conus_land.png" alt="Topography Overlay" /></div>
                                <div id="image1"><img name="img1" style="z-index:1" width="560" height="306" src="/images/2009/3/27/current/conus_precip-observed.png" alt="Percentage Overlay" /></div>
                                <div id="image2"><img name="img2" style="z-index:2" width="560" height="306" src="/images/spacer.gif" alt="County Overlay /"></div>
                                <div id="image3"><img name="img3" style="z-index:3" width="560" height="306" src="/images/spacer.gif" alt="River Overlay" /></div>
                                <div id="image4"><img name="img4" style="z-index:4" width="560" height="306" src="/images/geolayers/states/conus_states.png" alt="State Overlay" /></div>
                                <div id="image5"><img name="img5" style="z-index:5" width="560" height="306" src="/images/spacer.gif" alt="Highway / City Overlay" /></div>
                                <div id="image6"><img name="img6" style="z-index:6" width="560" height="306" src="/images/spacer.gif" alt="RFC Basin Boundary Overlay" /></div>
                        <div id="image7"><img name="img7" style="z-index:8;" src="/images/1_obs_legend.gif" alt="Legend" /></div>
        <div id="image8"><img id="img8" name="img8" style="z-index: 9; border: 0;" width="560" height="306" src="/images/spacer.gif" alt="Map Overlay" usemap="#imap0" /></div>
        <map name="imap0" id="imap0">
            <area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="279" shape="poly" coords="52,-49,52,-56,52,-49" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="287" shape="poly" coords="65,-58,63,-50,64,-55,60,-54,65,-58" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="299" shape="poly" coords="63,-62,62,-66,63,-62" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="302" shape="poly" coords="60,-60,60,-64,60,-60" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="305" shape="poly" coords="57,-54,56,-47,52,-56,55,-67,57,-54" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="306" shape="poly" coords="53,-77,58,-91,60,-80,60,-86,58,-78,53,-77" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="313" shape="poly" coords="50,-66,54,-75,55,-70,50,-66" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="411" shape="poly" coords="-40,-266,-41,-257,-46,-259,-47,-272,-43,-274,-40,-266" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="421" shape="poly" coords="-56,-188,-60,-188,-56,-188" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="524" shape="poly" coords="-25,-151,-24,-146,-29,-148,-25,-151" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="548" shape="poly" coords="-30,-144,-31,-141,-34,-144,-44,-142,-40,-144,-43,-147,-45,-144,-40,-151,-39,-145,-35,-151,-30,-144" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="565" shape="poly" coords="-39,-141,-36,-141,-39,-141" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="583" shape="poly" coords="-62,-225,-63,-220,-67,-221,-67,-231,-62,-225" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="596" shape="poly" coords="-52,-223,-52,-218,-57,-218,-57,-223,-52,-223" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="598" shape="poly" coords="-81,-261,-81,-256,-81,-261" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="650" shape="poly" coords="8,-143,13,-146,8,-143" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="651" shape="poly" coords="17,-145,14,-143,17,-145" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="715" shape="poly" coords="-102,-175,-103,-168,-113,-176,-102,-175" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="716" shape="poly" coords="-84,-156,-88,-155,-84,-156" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="820" shape="poly" coords="-194,-237,-189,-233,-194,-237" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="822" shape="poly" coords="-194,-241,-192,-237,-196,-237,-194,-241" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="846" shape="poly" coords="-174,-217,-181,-223,-174,-217" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="853" shape="poly" coords="-173,-212,-171,-207,-175,-215,-173,-212" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="862" shape="poly" coords="-189,-231,-189,-228,-192,-231,-189,-231" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="874" shape="poly" coords="-124,-181,-131,-179,-137,-185,-124,-181" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="880" shape="poly" coords="-135,-187,-147,-189,-135,-187" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="913" shape="poly" coords="-30,-237,-33,-230,-35,-235,-30,-237" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="937" shape="poly" coords="15,-192,11,-184,15,-192" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="974" shape="poly" coords="-209,-258,-208,-262,-208,-255,-209,-258" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="976" shape="poly" coords="-212,-315,-210,-307,-212,-315" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="980" shape="poly" coords="-216,-306,-213,-303,-216,-306" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="984" shape="poly" coords="-207,-273,-211,-273,-207,-273" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="991" shape="poly" coords="9,-147,11,-150,9,-147" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="996" shape="poly" coords="48,-82,46,-80,48,-82" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="1092" shape="poly" coords="50,-84,48,-68,50,-84" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="1246" shape="poly" coords="58,-74,61,-71,57,-67,58,-74" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="1377" shape="poly" coords="51,-85,50,-93,56,-87,51,-89,54,-82,51,-85" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAK" tabindex="1380" shape="poly" coords="-26,-231,-11,-226,-8,-233,0,-235,-12,-238,-10,-242,-18,-248,-16,-261,-11,-255,-14,-269,5,-259,1,-254,8,-244,13,-255,11,-248,16,-244,12,-248,16,-252,11,-261,16,-281,23,-282,29,-274,47,-276,54,-272,51,-268,54,-272,70,-267,65,-261,71,-261,74,-242,80,-240,89,-224,96,-220,99,-212,39,-126,49,-121,48,-103,63,-104,65,-65,73,-55,66,-45,62,-45,67,-49,63,-49,67,-58,59,-56,66,-61,59,-75,64,-81,59,-90,62,-102,56,-90,51,-103,52,-93,48,-94,40,-115,45,-118,43,-114,46,-115,45,-119,39,-118,37,-126,23,-134,24,-141,20,-140,17,-148,21,-150,13,-153,16,-156,9,-156,9,-150,4,-147,1,-152,-2,-149,-1,-152,-16,-153,-7,-155,-12,-158,-2,-165,3,-164,8,-157,6,-164,11,-164,-13,-168,-14,-163,-27,-163,-26,-156,-54,-155,-67,-159,-71,-156,-89,-164,-88,-168,-94,-166,-95,-171,-98,-168,-99,-173,-103,-171,-86,-171,-81,-163,-76,-167,-54,-163,-46,-171,-40,-169,-36,-173,-47,-175,-44,-181,-52,-177,-52,-189,-63,-194,-56,-195,-44,-209,-52,-206,-59,-212,-57,-218,-47,-217,-52,-224,-49,-224,-49,-234,-33,-234,-33,-229,-29,-237,-26,-231" alt="AK state" title="AK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAL" tabindex="1408" shape="poly" coords="354,188,360,188,371,227,348,230,350,235,345,238,339,222,338,190,354,188" alt="AL state" title="AL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAR" tabindex="1409" shape="poly" coords="286,195,284,179,321,177,319,182,325,182,315,203,315,212,291,214,286,195" alt="AR state" title="AR state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateAZ" tabindex="1413" shape="poly" coords="121,191,119,173,124,174,127,164,167,170,161,227,143,225,113,209,121,191" alt="AZ state" title="AZ state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateCA" tabindex="1418" shape="poly" coords="76,185,72,184,76,185" alt="CA state" title="CA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateCA" tabindex="1440" shape="poly" coords="61,138,61,141,57,138,53,113,59,96,91,105,83,135,119,183,122,191,115,199,115,206,93,204,84,187,69,179,60,144,61,142,64,146,62,140,70,142,61,138" alt="CA state" title="CA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateCO" tabindex="1444" shape="poly" coords="224,168,224,174,167,170,172,130,225,134,224,168" alt="CO state" title="CO state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateCT" tabindex="1449" shape="poly" coords="448,95,453,93,455,100,442,108,440,97,448,95" alt="CT state" title="CT state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateDE" tabindex="1451" shape="poly" coords="432,128,438,136,433,137,430,123,432,128" alt="DE state" title="DE state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1454" shape="poly" coords="414,248,410,241,416,253,414,248" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1455" shape="poly" coords="413,247,414,250,413,247" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1559" shape="poly" coords="407,238,410,241,406,235,407,238" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1560" shape="poly" coords="418,255,416,253,418,255" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1618" shape="poly" coords="421,280,420,282,421,280" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1640" shape="poly" coords="356,235,351,236,356,235" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1642" shape="poly" coords="403,230,405,233,403,230" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateFL" tabindex="1644" shape="poly" coords="408,274,403,263,401,266,396,260,398,255,394,256,393,243,381,235,369,241,366,235,358,235,361,234,349,237,348,230,396,230,397,225,402,226,422,265,421,280,415,282,415,277,408,274" alt="FL state" title="FL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateGA" tabindex="1670" shape="poly" coords="365,187,381,184,379,188,405,211,397,230,372,229,360,188,365,187" alt="GA state" title="GA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateIA" tabindex="1671" shape="poly" coords="309,129,307,139,274,138,267,109,306,107,316,121,309,129" alt="IA state" title="IA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateID" tabindex="1674" shape="poly" coords="159,113,158,118,113,110,117,85,125,75,122,66,129,40,135,41,134,57,142,67,138,78,144,78,148,92,162,93,159,113" alt="ID state" title="ID state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateIL" tabindex="1675" shape="poly" coords="336,126,340,152,334,169,327,171,317,160,319,153,307,142,309,128,315,123,311,117,333,114,336,126" alt="IL state" title="IL state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateIN" tabindex="1676" shape="poly" coords="356,151,352,158,336,162,340,152,336,122,356,119,361,148,356,151" alt="IN state" title="IN state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateKS" tabindex="1677" shape="poly" coords="235,174,224,174,225,144,280,145,284,174,235,174" alt="KS state" title="KS state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateKY" tabindex="1679" shape="poly" coords="362,170,327,176,337,161,352,158,361,145,376,146,386,157,377,167,362,170" alt="KY state" title="KY state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateLA" tabindex="1948" shape="poly" coords="310,245,294,247,296,234,291,214,316,213,318,219,313,233,329,232,329,242,334,244,330,246,337,250,334,252,327,245,328,250,321,252,310,245" alt="LA state" title="LA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMA" tabindex="1962" shape="poly" coords="458,87,468,92,460,97,456,92,440,96,440,89,457,82,458,87" alt="MA state" title="MA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMD" tabindex="1996" shape="poly" coords="438,141,438,137,438,141" alt="MD state" title="MD state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMD" tabindex="2000" shape="poly" coords="425,132,429,143,421,141,423,135,414,130,402,137,401,132,429,125,433,137,438,136,437,141,428,138,429,126,425,132" alt="MD state" title="MD state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateME" tabindex="2037" shape="poly" coords="459,75,457,80,447,59,453,33,460,32,478,53,469,63,466,60,466,67,462,71,461,68,459,75" alt="ME state" title="ME state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMI" tabindex="2039" shape="poly" coords="317,62,321,58,317,62" alt="MI state" title="MI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMI" tabindex="2199" shape="poly" coords="368,114,341,121,344,111,341,91,345,85,346,89,348,79,361,83,360,98,369,95,372,106,368,114" alt="MI state" title="MI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMI" tabindex="2200" shape="poly" coords="324,67,327,65,324,67" alt="MI state" title="MI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMI" tabindex="2201" shape="poly" coords="319,70,336,74,347,68,356,75,344,76,337,82,334,79,331,88,326,80,309,75,319,70" alt="MI state" title="MI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMN" tabindex="2204" shape="poly" coords="299,73,293,86,294,95,306,107,268,109,261,53,275,53,276,49,284,57,314,60,299,73" alt="MN state" title="MN state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMO" tabindex="2205" shape="poly" coords="284,138,306,138,329,171,325,181,319,182,321,177,284,179,283,152,274,138,284,138" alt="MO state" title="MO state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMS" tabindex="2215" shape="poly" coords="339,211,342,237,331,240,329,232,313,233,318,219,314,206,321,192,339,191,339,211" alt="MS state" title="MS state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateMT" tabindex="2216" shape="poly" coords="170,88,162,87,162,93,147,91,144,78,138,78,142,67,134,57,135,41,215,52,213,93,170,88" alt="MT state" title="MT state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNC" tabindex="2287" shape="poly" coords="443,168,442,164,443,168" alt="NC state" title="NC state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNC" tabindex="2309" shape="poly" coords="438,160,441,164,436,157,438,160" alt="NC state" title="NC state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNC" tabindex="2366" shape="poly" coords="433,157,439,161,429,160,431,165,438,166,438,162,440,166,429,169,435,171,430,173,432,175,437,174,428,178,425,187,397,180,371,186,390,166,433,157" alt="NC state" title="NC state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateND" tabindex="2369" shape="poly" coords="215,56,215,52,261,53,266,84,213,83,215,56" alt="ND state" title="ND state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNE" tabindex="2370" shape="poly" coords="269,124,277,144,225,144,225,134,210,133,211,113,261,115,269,124" alt="NE state" title="NE state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNH" tabindex="2371" shape="poly" coords="454,76,458,82,445,87,446,60,454,76" alt="NH state" title="NH state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNJ" tabindex="2396" shape="poly" coords="441,124,438,131,432,127,436,118,431,114,433,106,440,108,441,124" alt="NJ state" title="NJ state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNM" tabindex="2397" shape="poly" coords="185,222,161,227,167,170,216,174,213,224,185,222" alt="NM state" title="NM state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNV" tabindex="2398" shape="poly" coords="113,175,83,135,91,105,136,114,125,172,120,172,119,183,113,175" alt="NV state" title="NV state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNY" tabindex="2413" shape="poly" coords="455,103,451,106,455,103" alt="NY state" title="NY state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNY" tabindex="2416" shape="poly" coords="449,108,446,110,449,108" alt="NY state" title="NY state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNY" tabindex="2419" shape="poly" coords="444,108,452,103,441,112,444,108" alt="NY state" title="NY state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateNY" tabindex="2420" shape="poly" coords="416,86,414,82,419,73,433,67,443,105,440,111,427,101,394,109,399,100,396,95,412,92,416,86" alt="NY state" title="NY state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateOH" tabindex="2421" shape="poly" coords="382,115,388,110,391,127,381,149,360,145,356,119,382,115" alt="OH state" title="OH state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateOK" tabindex="2422" shape="poly" coords="216,174,284,174,287,208,280,205,264,208,243,201,240,180,216,179,216,174" alt="OK state" title="OK state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateOR" tabindex="2431" shape="poly" coords="60,96,59,87,67,80,74,54,84,65,108,66,125,73,117,85,113,110,60,96" alt="OR state" title="OR state" />
<area href="index_nonjs.php?loctype=STATE&loc=statePA" tabindex="2432" shape="poly" coords="430,105,436,118,433,122,393,133,391,108,427,101,430,105" alt="PA state" title="PA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateRI" tabindex="2438" shape="poly" coords="457,96,455,100,453,93,457,96" alt="RI state" title="RI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateSC" tabindex="2462" shape="poly" coords="404,207,403,211,379,188,381,184,397,180,409,181,421,189,404,207" alt="SC state" title="SC state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateSD" tabindex="2465" shape="poly" coords="212,97,213,83,266,84,268,119,253,114,211,113,212,97" alt="SD state" title="SD state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateTN" tabindex="2466" shape="poly" coords="370,184,321,192,326,176,390,166,370,184" alt="TN state" title="TN state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateTX" tabindex="2479" shape="poly" coords="271,263,268,265,271,263" alt="TX state" title="TX state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateTX" tabindex="2513" shape="poly" coords="264,270,266,267,263,273,264,270" alt="TX state" title="TX state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateTX" tabindex="2527" shape="poly" coords="264,280,263,274,265,285,264,280" alt="TX state" title="TX state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateTX" tabindex="2530" shape="poly" coords="268,261,262,267,263,272,259,271,265,286,255,285,247,282,227,247,216,247,210,255,199,247,196,237,183,224,213,224,216,179,240,180,240,199,247,203,290,208,296,234,294,248,286,251,288,249,283,247,281,256,268,261" alt="TX state" title="TX state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateUT" tabindex="2533" shape="poly" coords="157,127,172,130,167,170,127,164,136,114,158,118,157,127" alt="UT state" title="UT state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVA" tabindex="2586" shape="poly" coords="408,140,410,132,418,133,422,136,420,141,430,144,426,145,432,153,426,152,437,157,373,169,386,157,389,160,398,156,402,143,408,140" alt="VA state" title="VA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVA" tabindex="2588" shape="poly" coords="435,147,435,151,437,141,435,147" alt="VA state" title="VA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVT" tabindex="2591" shape="poly" coords="435,75,433,67,445,63,446,88,440,89,435,75" alt="VT state" title="VT state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWA" tabindex="2608" shape="poly" coords="89,37,90,41,89,37" alt="WA state" title="WA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWA" tabindex="2638" shape="poly" coords="87,46,83,48,92,41,91,29,129,40,123,70,81,63,80,57,73,54,78,47,76,32,88,38,83,45,89,40,87,46" alt="WA state" title="WA state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWI" tabindex="2664" shape="poly" coords="334,88,333,91,334,88" alt="WI state" title="WI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWI" tabindex="2673" shape="poly" coords="332,111,333,114,308,114,305,102,294,95,296,76,306,72,306,76,329,82,328,94,333,91,332,111" alt="WI state" title="WI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWV" tabindex="2674" shape="poly" coords="386,158,379,149,390,135,390,124,393,133,401,132,402,137,414,130,415,135,410,132,398,156,386,158" alt="WV state" title="WV state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateWY" tabindex="2675" shape="poly" coords="164,129,157,128,162,87,213,93,210,133,164,129" alt="WY state" title="WY state" />
<area href="index_nonjs.php?loctype=STATE&loc=statePR" tabindex="2977" shape="poly" coords="430,289,434,289,430,289" alt="PR state" title="PR state" />
<area href="index_nonjs.php?loctype=STATE&loc=statePR" tabindex="3133" shape="poly" coords="526,287,533,288,521,289,526,287" alt="PR state" title="PR state" />
<area href="index_nonjs.php?loctype=STATE&loc=statePR" tabindex="3189" shape="poly" coords="484,294,459,296,459,282,465,281,456,278,463,272,478,274,479,279,481,273,486,278,484,274,490,273,490,276,490,273,520,277,521,284,512,287,509,293,484,294" alt="PR state" title="PR state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVI" tabindex="3202" shape="poly" coords="553,305,547,306,548,303,560,303,553,305" alt="VI state" title="VI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVI" tabindex="3280" shape="poly" coords="549,279,542,279,549,279" alt="VI state" title="VI state" />
<area href="index_nonjs.php?loctype=STATE&loc=stateVI" tabindex="3281" shape="poly" coords="551,279,557,279,551,279" alt="VI state" title="VI state" />
        </map>
        <script type="text/javascript">
        <!--
        imgmap_add_js();
        //-->
        </script>

    </div>
    
    <div id="overlays">
    <form name="frm_overlay" action="index.php" method="get">
    <input type="checkbox" id="checkbox0" name="layer[]" value="0" checked onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox0">Topo</label> &nbsp;
    <input type="checkbox" id="checkbox1" name="layer[]" value="1" checked onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox1">Pcpn Amount</label> &nbsp;
    <input type="checkbox" id="checkbox2" name="layer[]" value="2" onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox2">Counties</label> &nbsp;
    <input type="checkbox" id="checkbox3" name="layer[]" value="3" onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox3">Rivers</label> &nbsp;
    <input type="checkbox" id="checkbox4" name="layer[]" value="4" checked onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox4">States</label> &nbsp;
    <input type="checkbox" id="checkbox5" name="layer[]" value="5" onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox5">Highway/City</label> &nbsp;
    <input type="checkbox" id="checkbox6" name="layer[]" value="6" onclick="toggle_layer(this, this.checked)" onkeypress="toggle_layer(this, this.checked)" /><label for="checkbox6">RFC Boundary</label> &nbsp;
    </div>
    
    <div id="interface">
    <table cellspacing="0" cellpadding="0" width="616" border="0">
    <tr>
        <th scope="col" width="24%" class="interface">&nbsp;<label for="recent"><b>1. Timeframe</b></label></th> 
        <th scope="col" width="2%"  class="interface">&raquo;</th> 
        <th scope="col" width="21%" class="interface">&nbsp;<label for="product"><b>2. Product</b></label></th> 
        <th scope="col" width="2%"  class="interface">&raquo;</th> 
        <th scope="col" width="36%" class="interface">&nbsp;<label for="station"><b>3. Location</b></label></th> 
        <th scope="col" width="2%"  class="interface">&raquo;</th> 
        <th scope="col" width="12%" class="interface">&nbsp;<label for="units"><b>4. Units</b></label></th> 
    </tr>
    <tr>
        <td scope="col" colspan="2" valign="top">
        <input id="recent_radio" tabindex="1" type="radio" name="timetype" value="RECENT" checked onclick="change_time(this)" onkeypress="change_time(this)"><label for="recent_radio">Current Data</label><br>
        <input id="ym_radio" tabindex="2" type="radio" name="timetype" value="YM" onclick="change_time(this)" onkeypress="change_time(this)"/><label for="ym_radio">Archive: Month/Year</label><br>
        <input id="d_radio" tabindex="3" type="radio" name="timetype" value="D" onclick="change_time(this)" onkeypress="change_time(this)"/><label for="d_radio">Archive: Daily</label><br>
        </td>
        <td scope="col" colspan="2" valign="top">&nbsp;</td>
        <td scope="col" colspan="2" valign="top" >
        <input id="state_radio" tabindex="9" type="radio" name="loctype" value="STATE" checked onclick="change_locs(this)" onkeypress="change_locs(this)"/><label for="state_radio">States</label><br>
        <input id="nws_radio" tabindex="10" type="radio" name="loctype" value="NWS" onclick="change_locs(this)" onkeypress="change_locs(this)"/><label for="nws_radio">NWS RFC/Regions</label><br>
        <input id="wfo_radio" tabindex="11" type="radio" name="loctype" value="WFO" onclick="change_locs(this)" onkeypress="change_locs(this)"/><label for="wfo_radio">NWS WFOs</label><br />
        </td>
        <td scope="col" colspan="2" valign="top">
        <input id="english_radio" tabindex="13" type="radio" name="units" value="engl" checked onclick="change_images('units')" onkeypress="change_images('units')" /><label for="english_radio">English</label><br>
        <input id="metric_radio" tabindex="14" type="radio" name="units" value="metric" onclick="change_images('units')" onkeypress="change_images('units')" /><label for="metric_radio">Metric</label><br>
        </td>
    </tr>
    <tr>
        <td scope="col" colspan="2" valign="top">
            
            <span id="RECENT">
            <select id="tf_recent" tabindex="4" name="timeframe" size="5" class="timeframe" onchange="change_product('RECENT'); change_images('percentage');">
                        <option value="current" selected>March 27, 2009 - Today</option>
            <option value="last7days">March 27, 2009 - Last 7 Days</option>
            <option value="last14days">March 27, 2009 - Last 14 Days</option>
            <option value="last30days">March 27, 2009 - Last 30 Days</option>
            <option value="last60days">March 27, 2009 - Last 60 Days</option>
            <option value="last90days">March 27, 2009 - Last 90 Days</option>
            <option value="last180days">March 27, 2009 - Last 180 Days</option>
            <option value="month2date">March 27, 2009 - Month to Date</option>
            <option value="year2date">March 27, 2009 - Year to Date</option>
            <option value="wateryear2date">March 27, 2009 - Water-Year to Date (Oct 1)</option>
            </select>
            <label for="tf_recent">&nbsp;</label>
            </span>

            <span id="YM" style="display: none;">
            <table border="0" width="100%">
            <tr>
                <td scope="col" width="20%">&nbsp;Year:</td>
                <td scope="col" align="left">
                <select id="year_select" tabindex="5" name="timeYYYY" size="1" class="interface" onchange="check_date(); change_images('percentage');" disabled="disabled">
                            <option value="2009" selected>2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
                </select>
                <label for="year_select">&nbsp;</label>
                </td>
            </tr>
            <tr>
                <td scope="col">&nbsp;Month:</td>
                <td scope="col" align="left">
                <select id="month_select" tabindex="6" name="timeMM" size="1" class="interface" onchange="check_date(); change_images('percentage');" disabled="disabled">
                            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3" selected>March</option>
                </select>
                <label for="month_select">&nbsp;</label>
                </td>
            </tr>
            <tr id="D"style="display: none;">
                <td scope="col" width="20%">&nbsp;Day:</td>
                <td scope="col" align="left">
                <select id="day_select" tabindex="7" name="timeDD" size="1" class="interface" onchange="change_images('percentage');" disabled="disabled">
                            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27" selected>27</option>
                </select>
                <label for="day_select">&nbsp;</label>
                </td>
            </tr>
            </table>
            </span>
        </td>
        <td scope="col" colspan="2" valign="top">
        <select id="prod_select" tabindex="8" name="product" size="5" class="interface" onchange="change_images('percentage');">
        <option id="prod_observed" value="observed" selected> Observed</option>
        </select>
        <label for="prod_select">&nbsp;</label>
        </td>
        <td scope="col" colspan="2" valign="top">
        <select id="loc_select" tabindex="12" name="loc" size="5" class="interface" onchange="change_images('loc');">
                    <option value="conus" selected>CONUS + Puerto Rico</option>
            <option value="stateAL">Alabama</option>
            <option value="stateAZ">Arizona</option>
            <option value="stateAR">Arkansas</option>
            <option value="stateCA">California</option>
            <option value="stateCO">Colorado</option>
            <option value="stateCT">Connecticut</option>
            <option value="stateDE">Delaware</option>
            <option value="stateFL">Florida</option>
            <option value="stateGA">Georgia</option>
            <option value="stateID">Idaho</option>
            <option value="stateIL">Illinois</option>
            <option value="stateIN">Indiana</option>
            <option value="stateIA">Iowa</option>
            <option value="stateKS">Kansas</option>
            <option value="stateKY">Kentucky</option>
            <option value="stateLA">Louisiana</option>
            <option value="stateME">Maine</option>
            <option value="stateMD">Maryland</option>
            <option value="stateMA">Massachusetts</option>
            <option value="stateMI">Michigan</option>
            <option value="stateMN">Minnesota</option>
            <option value="stateMS">Mississippi</option>
            <option value="stateMO">Missouri</option>
            <option value="stateMT">Montana</option>
            <option value="stateNE">Nebraska</option>
            <option value="stateNV">Nevada</option>
            <option value="stateNH">New Hampshire</option>
            <option value="stateNJ">New Jersey</option>
            <option value="stateNM">New Mexico</option>
            <option value="stateNY">New York</option>
            <option value="stateNC">North Carolina</option>
            <option value="stateND">North Dakota</option>
            <option value="stateOH">Ohio</option>
            <option value="stateOK">Oklahoma</option>
            <option value="stateOR">Oregon</option>
            <option value="statePA">Pennsylvania</option>
            <option value="statePR">Puerto Rico</option>
            <option value="stateRI">Rhode Island</option>
            <option value="stateSC">South Carolina</option>
            <option value="stateSD">South Dakota</option>
            <option value="stateTN">Tennessee</option>
            <option value="stateTX">Texas</option>
            <option value="stateUT">Utah</option>
            <option value="stateVT">Vermont</option>
            <option value="stateVA">Virginia</option>
            <option value="stateWA">Washington</option>
            <option value="stateWV">West Virginia</option>
            <option value="stateWI">Wisconsin</option>
            <option value="stateWY">Wyoming</option>
        </select>
        <label for="loc_select">&nbsp;</label>
        </td>
        <td scope="col" colspan="2" align="right" valign="top"><img src="/images/missing_data.gif" alt="Missing Data" /></td>
    </tr>
    <tr>
        <td scope="col" colspan="4" style="padding-top: 0.5em;">
        <input type="button" value="Update URL for Bookmarking" alt="Click here to update your URL" title="Click here to update your URL" onclick="update_url();" onkeypress="update_url();" /><br />
        <input type="button" value="Print/Save Map" alt="Click here to create a separate map image for saving or printing" title="Click here to create a separate map image for saving or printing" onclick="print_save();" onkeypress="print_save();" />
        <script type="text/javascript">
        <!--
        function update_url() {
            document.frm_overlay.action = "index.php";
            document.frm_overlay.target = "";
            document.frm_overlay.submit();
        }
        function print_save() {
            document.frm_overlay.action = "save.php";
            document.frm_overlay.target = "_new";
            document.frm_overlay.submit();
        }
        //-->
        </script>
        </td>
        <td scope="col" colspan="4" style="padding-top: 0.5em;" valign="top" align="right">
        <input type="button" value="Zoom Out to CONUS" alt="Click here to zoom out to CONUS" title="Click here to zoom out to CONUS" onclick="conus_click();" onkeypress="conus_click();" />
        </td>
    </tr>
    <tr>
        <td scope="col" colspan="7" style="font-weight: bold; font-style: italic;"><br /><p>
        NOTE: If you would like to bookmark or share your current view, you must first click the "Update URL for Bookmarking" button. The URL in your browser window can then be bookmarked or shared.</p></td>
    </form>
    </table>
    </div>
    </div>
    
    
    </td>
</tr>

<tr>
    <td scope="col" bgcolor="#0A2390">&nbsp;</td>
    <td scope="col">&nbsp;</td>
    <td scope="col" width="600" style="text-align: center;"><a href="mailto:&#65;H&#80;S.&#80;recip@&#110;&#111;&#97;&#97;.&#103;o&#118;?subject=Precipitation Analysis" title="Ask questions about the Precipitation Analysis website">Ask questions about the Precipitation Analysis website</a></td>
</tr>

<tr>
    <td scope="col" bgcolor="#0A2390">&nbsp;</td>
    <td scope="col">&nbsp;</td>
    <td scope="col">
    
    <!--- begin our footer basic for all pages  --->
    <table width="600" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td scope="col"><br />
        <!--- display our callobaritve agencies --->
        
        <table width="200" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td scope="col" width="3" align="right"><img src="/images/section_tab_left.gif" width="3" height="23" alt="" border="0" /></td>
            <td scope="col" background="/images/section_tab_middle.gif" align="center" title="NWS Information">NWS Information</td>
            <td scope="col" width="4" align="right"><img src="/images/section_tab_right.gif" width="4" height="23" alt="" border="0" /></td>
        </tr>
        </table>
        </td>
    </tr>
    <tr>
        <td scope="col" bgcolor="#0B2391"><img src="/images/spacer.gif" width="600" height="2" alt="" /></td>
    </tr>
    <tr>
        <td scope="col">
        <table width="600" cellspacing="2" cellpadding="2" border="0">
        <tr valign="top">
            <td scope="col" class="gray">
            <a href="http://www.doc.gov" title="US Dept of Commerce"><span class="gray">US Dept of Commerce</span></a><br />
            <a href="http://www.noaa.gov" title="National Oceanic and Atmospheric Administration"><span class="gray">National Oceanic and Atmospheric Administration</span></a><br />
            National Weather Service<br />
            1325 East West Highway<br />
            Silver Spring, MD 20910<br />
            Page Author: <a href="mailto:SR-TUA.Precip@noaa.gov" title="Email NWS Internet Services Team"><span class="gray">NWS Internet Services Team</span></a><br />
            Page last modified: 7-Oct-2008 4:06 PM            </td>
            <td scope="col">
            <a href="http://www.weather.gov/disclaimer.php" title="Disclaimer"><span class="gray">Disclaimer</span></a><br />
            <a href="http://www.noaanews.noaa.gov/stories/iq.htm" title="Information Quality"><span class="gray">Information Quality</span></a><br />
            <a href="http://www.weather.gov/credits.php" title="Credits"><span class="gray">Credits</span></a><br />
            <a href="http://www.weather.gov/glossary/" title="Glossary"><span class="gray">Glossary</span></a>
            </td>
            <td scope="col" align="right">
            <a href="http://www.weather.gov/privacy.php" title="Privacy Policy"><span class="gray">Privacy Policy</span></a><br />
            <a href="http://www.rdc.noaa.gov/%7Efoia/" title="Freedom of Information Act (FOIA)"><span class="gray">Freedom of Information Act (FOIA)</span></a><br />
            <a href="http://www.weather.gov/admin.php" title="About Us"><span class="gray">About Us</span></a><br />
            <a href="http://www.weather.gov/careers.php" title="Career Opportunities"><span class="gray">Career Opportunities</span></a>
            </td>
        </tr>
        </table>
        </td>
    </tr>
    </table>
    <!--- end our inner display table --->
    
    </td>
</tr>
</table>

</body>
</html>
