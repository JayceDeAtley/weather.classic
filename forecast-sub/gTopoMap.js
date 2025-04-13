function load(lat,lon,points){
	if (!GBrowserIsCompatible()) {
		alert('Sorry, your browser is not compatible');
	}else{
		var point = new GLatLng(lat,lon);
		var map = new GMap2(document.getElementById("gmap"), {draggableCursor: 'pointer'});
		map.addOverlay(new GScreenOverlay('/images/wtf/shadowedgeleft.png', new GScreenPoint(0,0,'pixels','pixels'), new GScreenPoint(0,0,'pixels','pixels'), new GScreenSize(10,720,'pixels','pixels')));
		map.addOverlay(new GScreenOverlay('/images/wtf/shadowedgetop.png', new GScreenPoint(0,1,'fraction','fraction'), new GScreenPoint(0,10,'pixels','pixels'), new GScreenSize(720,10,'pixels','pixels')));
		map.addMapType(G_PHYSICAL_MAP);
		map.addControl(new GSmallMapControl());
		map.enableContinuousZoom();
		map.enableScrollWheelZoom();
		map.removeMapType(G_NORMAL_MAP);
		map.setCenter(point, gmscale,G_PHYSICAL_MAP);
		GEvent.addListener(map, "click", function(overlay,point){
			if (point){
				var list='?lat='+point.y+'&lon='+point.x+'&site='+gmsite+'&smap=1'+'&marine='+gmmarine+'&unit='+gmsi+'&lg='+gmlng;
				parent.location.href='MapClick.php'+list;
			}
		});//end addListener function
		// put polygon on map (from gTopoMap.js)
		if(points){
			var polygon = new GPolygon(points, "#f33f00",1,1,"#ff0000");
			map.addOverlay(polygon);
		}
		var crosshair = new GIcon();
		crosshair.image = '/images/wtf/crosshair.png';
		crosshair.iconAnchor = new GPoint(8,8);
		map.addOverlay(new GMarker(new GLatLng(lat,lon), {
			icon: crosshair,
			clickable: false,
			title: 'Requested location'
		}));
	}
}


