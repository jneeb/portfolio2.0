var burger = document.getElementById("mobileBurger");
// var nav = document.getElementById("mobileNav");

burger.onclick = burgerOpen;

function burgerOpen() {
	if (burger.className !== "isOpen") {
		burger.className += "isOpen";
		// nav.className += "isOpen";
	} else {
		burger.classList.remove("isOpen");
		// nav.classList.remove("isOpen");
	}
}
