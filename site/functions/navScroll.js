(function () {
	var header = document.getElementById("desktopNav");
	window.onscroll = function () {
		var header = document.getElementById("desktopNav");
		if (window.pageYOffset >= window.innerHeight && header.className !== "onScroll") {
			header.className += "onScroll";
			$("#desktopNav ul a").addClass("onScroll");
			$("#desktopNav .logo").addClass("onScroll");
			$(".socialLinks a").addClass("onScroll");
		} else if (window.pageYOffset < window.innerHeight && header.className == "onScroll") {
			header.classList.remove("onScroll");
			$("#desktopNav ul a").removeClass("onScroll");
			$("#desktopNav .logo").removeClass("onScroll");
			$(".socialLinks a").removeClass("onScroll");
		}
	}
}());
