(function () {
	var breakfastMenu = document.getElementById("breakfastMenu");
	var lunchMenu = document.getElementById("lunchMenu");
	var dinnerMenu = document.getElementById("dinnerMenu");
	var breakfastTag = document.getElementById("breakfast");
	var lunchTag = document.getElementById("lunch");
	var dinnerTag = document.getElementById("dinner");

	breakfastTag.onclick = breakfastMenuSwitch;
	lunchTag.onclick = lunchMenuSwitch;
	dinnerTag.onclick = dinnerMenuSwitch;

	function breakfastMenuSwitch() {
		breakfastTag.classList.remove("active");
		lunchTag.classList.remove("active");
		dinnerTag.classList.remove("active");
		breakfastMenu.classList.remove("active");
		lunchMenu.classList.remove("active");
		dinnerMenu.classList.remove("active");

		if (breakfastMenu.className !== "active") {
			breakfastMenu.className += "active";
			breakfastTag.className += "active";
		} else {

		}
	}
	function lunchMenuSwitch() {
		breakfastTag.classList.remove("active");
		lunchTag.classList.remove("active");
		dinnerTag.classList.remove("active");
		breakfastMenu.classList.remove("active");
		lunchMenu.classList.remove("active");
		dinnerMenu.classList.remove("active");

		if (breakfastMenu.className !== "active") {
			lunchMenu.className += "active";
			lunchTag.className += "active";
		} else {

		}
	}
	function dinnerMenuSwitch() {
		breakfastTag.classList.remove("active");
		lunchTag.classList.remove("active");
		dinnerTag.classList.remove("active");
		breakfastMenu.classList.remove("active");
		lunchMenu.classList.remove("active");
		dinnerMenu.classList.remove("active");

		if (breakfastMenu.className !== "active") {
			dinnerMenu.className += "active";
			dinnerTag.className += "active";
		} else {

		}
	}

}());
