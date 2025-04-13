// Singleton design pattern emulated by defining and creating
// the object inside an anonymous function called once.
var loader = new function jsloader(){
	this.loadedRegistry = {};
	this.scriptRegistry = {};

	// So far only handles local URLs. Cross-site URLs may be
	// supported in the future when fetching based on a key,
	// but will not likely be supported for a URL argument.
	this.require = function require(keyOrURL){
		if(this.loadedRegistry[keyOrURL])
			return true;
		var URL;
		if(this.scriptRegistry[keyOrURL])
			script = this.scriptRegistry[keyOrURL];
		else
			script = {URL: keyOrURL};
		try{
			var xhr = this.createXHR();
		} catch(e){
			alert('Loader error: "require" failed. Error was: ' + e.message);
			return;
		}
		xhr.open("GET", script.URL, false);
		xhr.send(null);
		if(xhr.status != 200){
			alert('Loader error: "require" failed. Failed to fetch script "' + script.URL + '". Status code was: ' + xhr.status);
		} else {
			if (window.execScript){ // For Internet Explorer
				window.execScript(xhr.responseText);
			} else {
				//eval.call(null, xhr.responseText);
				// A simpler solution works for Firefox, but this works for FF & Safari, so just go with it.
			    // From: http://trac.dojotoolkit.org/ticket/236
			    var script = document.createElement('script');
			    var content = document.createTextNode(xhr.responseText);
			    script.appendChild(content);
			    script.type = 'text/javascript';
			    script.defer = false;
			    var head = document.getElementsByTagName('head').item(0);
			    head.appendChild(script);
			}
		}
		if(script.postProcess)
			script.postProcess();
			
		this.loadedRegistry[keyOrURL] = true;
		return true;
	}

	this.provides = function provides(key){
		this.loadedRegistry[key] = true;
	}

	this.loadScriptRegistry = function loadScriptRegistry(URL){
		try{
			var xhr = this.createXHR();
		} catch(e){
			alert('Loader error: "require" failed. Error was: ' + e.message);
			return;
		}
		xhr.open("GET", URL, false);
		xhr.send(null);
		if(xhr.status != 200){
			alert('Loader error: "require" failed. Failed to fetch registry "' + URL + '". Status code was: ' + xhr.status);
		} else {
			eval("loader.tempScriptRegistry = " + xhr.responseText);
			for(var key in loader.tempScriptRegistry){
				this.scriptRegistry[key] = loader.tempScriptRegistry[key];
			}
		}
	}
	
	this.createXHR = function createXHR(){
	    if (typeof XMLHttpRequest != "undefined") {
	        return new XMLHttpRequest();
	    } else if (typeof ActiveXObject != "undefined") {
	        return new ActiveXObject("Microsoft.XMLHTTP");
	    } else {
	        throw new Error("XMLHttpRequest not supported");
	    }
	}
}

	