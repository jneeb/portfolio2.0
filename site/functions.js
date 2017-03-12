document.getElementById("mobileBurger").onclick = function() {
	if (document.getElementById("mobileBurger").className !== "isOpen") {
			document.getElementById("mobileBurger").className += "isOpen";
		} else {
			document.getElementById("mobileBurger").classList.remove("isOpen");
	}
}

window.onscroll = function() {
	var header = document.getElementById("desktopNav");

	if (window.pageYOffset >= window.innerHeight && header.className !== "onScroll") {
		header.classList += "onScroll";
	} else if(window.pageYOffset < window.innerHeight && header.className == "onScroll"){
		header.classList.remove("onScroll");
	}
}
