var burger = document.getElementById("mobileBurger");
var nav = document.getElementById("mobileNav");

burger.onclick = navFunction;

function navFunction() {
	if (burger.className !== "isOpen") {
		burger.className += "isOpen";
		nav.className += "isOpen";
	} else {
		burger.classList.remove("isOpen");
		nav.classList.remove("isOpen");
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
