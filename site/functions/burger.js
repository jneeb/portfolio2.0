(function() {
	var burger = document.getElementById("mobileNavBurger");
	var mobileNav = document.getElementById("mobileNavSlider");

	burger.onclick = navFunction;

	function navFunction() {
		if (burger.className !== "isOpen") {
			burger.className += "isOpen";
			mobileNav.className += "isOpen";
		} else {
			burger.classList.remove("isOpen");
			mobileNav.classList.remove("isOpen");
		}
	}
}());
