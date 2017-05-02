$(document).ready(function () {
	$("#lunch").click(function () {
		$(".menu").fadeTo(800, 0);
		$("#lunchMenu").fadeTo(800, 1);
		$(".active").removeClass("active");
		$("#lunch").addClass("active");
	});
	$("#breakfast").click(function () {
		$(".menu").fadeTo(800, 0);
		$("#breakfastMenu").fadeTo(800, 1);
		$(".active").removeClass("active");
		$("#breakfast").addClass("active");
	});
	$("#dinner").click(function () {
		$(".menu").fadeTo(800, 0);
		$("#dinnerMenu").fadeTo(800, 1);
		$(".active").removeClass("active");
		$("#dinner").addClass("active");
	});
});
