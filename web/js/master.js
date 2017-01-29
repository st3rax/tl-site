$(document).ready(function(){
	$(".dropdown").mouseover(function() {
		$(this).find(".dropdown-menu").show();
	});

	$(".dropdown").mouseout(function() {
		$(this).find(".dropdown-menu").hide();
	});
});