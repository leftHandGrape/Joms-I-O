$(document).ready(function(){
  var prog_on = $(".container .prog_list").hasClass("hide_programming");  
  var elec_on = $(".container .elec_list").hasClass("hide_electronics");
  var sci_on = $(".container .sci_list").hasClass("hide_compsci");
	
	// Clicking the header removes the 2 other columns, centers the remaining column
    $(".programming").click(function(){
		$(".container .prog_list").removeClass("hide_programming");
		$(".first").css("margin","auto");
		$("#jom").fadeOut(100);
		$(".linkedIn").fadeOut(100);
		$("#disclaimer").fadeOut(100);
		$(".second").fadeOut(100);
		$(".third").fadeOut(100);
		$("#reset_prog").removeClass("first_reset");
	});
	
	// Adds all the goodies back
	$("#reset_prog").click(function(){
		$(".container .prog_list").addClass("hide_programming");
		$(".first").css("vertical-align","baseline");
		$("#jom").fadeIn(100);
		$("#disclaimer").fadeIn(100);
		$(".linkedIn").fadeIn(100);
		$(".second").fadeIn(100);
		$(".third").fadeIn(100);
		$("#reset_prog").addClass("first_reset");
	});
	
	//-----------------------------------------------------------------------
	
	/* Add the rest of the functionality to the remaining columns,
	review how the design works and make necessary changes */
	
	$(".electronics").click(function(){
		$(".container .elec_list").removeClass("hide_electronics");
		$(".second").css("margin","auto");
		$("#jom").fadeOut(100);
		$(".linkedIn").fadeOut(100);
		$("#disclaimer").fadeOut(100);
		$(".first").fadeOut(100);
		$(".third").fadeOut(100);
		$("#reset_elec").removeClass("second_reset");
	});
	
		$("#reset_elec").click(function(){
		$(".container .elec_list").addClass("hide_electronics");
		$("#jom").fadeIn(100);
		$("#disclaimer").fadeIn(100);
		$(".linkedIn").fadeIn(100);
		$(".first").fadeIn(100);
		$(".third").fadeIn(100);
		$("#reset_elec").addClass("second_reset");
	});

  
	$(".compsci").click(function(){
		$(".container .sci_list").removeClass("hide_compsci");
		$(".third").css("margin","auto");
		$("#jom").fadeOut(100);
		$(".linkedIn").fadeOut(100);
		$("#disclaimer").fadeOut(100);
		$(".first").fadeOut(100);
		$(".second").fadeOut(100);
		$("#reset_compsci").removeClass("third_reset");
	});
	
	$("#reset_compsci").click(function(){
		$(".container .sci_list").addClass("hide_compsci");
		$("#disclaimer").fadeIn(100);
		$("#jom").fadeIn(100);
		$(".linkedIn").fadeIn(100);
		$(".first").fadeIn(100);
		$(".second").fadeIn(100);
		$("#reset_compsci").addClass("third_reset");
	});  
});