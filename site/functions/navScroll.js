(function () {
	var header = document.getElementById("desktopNav");
	window.onscroll = function () {
		var header = document.getElementById("desktopNav");
		if (window.pageYOffset >= window.innerHeight && header.className !== "onScroll") {
			header.className += "onScroll";
		} else if (window.pageYOffset < window.innerHeight && header.className == "onScroll") {
			header.classList.remove("onScroll");
		}
	}
}());
