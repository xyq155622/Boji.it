$(document).ready(function(){
	var num_lazyheight = 0,
		num_window_height = 0;

	function showload(){
		num_lazyheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
		num_window_height = $(window).height();
		if ($(document).scrollTop() <= 50) {
			$(".header").css("opacity", 1);
		} else {
			$(".header").css("opacity", 0.5);
		}/* else if (num_window_height <= (num_lazyheight - 200)) {
			$(".header").css("opacity", 0.5);
		};*/
	}

	$(window).bind("scroll", function(){
		showload();
	});
});