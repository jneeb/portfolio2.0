(function() {
	var burger = document.getElementById("mobileBurger");
	var nav = document.getElementById("mobileNav");
	// var btn = document.getElementById("homeBtn");
	var mobileWork = document.getElementById("mobileWorkLink");
	// var map = document.getElementById("map");

	burger.onclick = navFunction;
	mobileWork.onclick = navMin;

	function navFunction() {
		if (burger.className !== "isOpen") {
			burger.className += "isOpen";
			nav.className += "isOpen";
			// btn.className += "isOpen";
			// map.className += "isOpen";
		} else {
			burger.classList.remove("isOpen");
			nav.classList.remove("isOpen");
			// btn.classList.remove("isOpen");
			// map.classList.remove("isOpen");
		}
	}
	function navMin() {
		if (burger.className == "isOpen") {
			burger.classList.remove("isOpen");
			nav.classList.remove("isOpen");
			// btn.classList.remove("isOpen");
		}
	}
}());

	window.onscroll = function() {
	var header = document.getElementById("desktopNav");

	if (window.pageYOffset >= window.innerHeight && header.className !== "onScroll") {
		header.classList += "onScroll";
	} else if(window.pageYOffset < window.innerHeight && header.className == "onScroll"){
		header.classList.remove("onScroll");
	}
}

// function initMap() {
// 		var uluru = {lat: 43.652881, lng: -79.379339};
// 		var map = new google.maps.Map(document.getElementById('map'), {
// 		  zoom: 12,
// 		  center: uluru
// 		});
// 		var marker = new google.maps.Marker({
// 		  position: uluru,
// 		  map: map
// 	});
// }
