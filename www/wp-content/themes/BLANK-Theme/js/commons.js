$(document).ready(function(){

$('#resumeButton').hide();

$('#pauseButton').click(function() { 
    $('#flash').cycle('pause');
    $(this).hide();
    $('#flash').hide('slow');
    $('#holder').css('margin-top','40px');
    $('#bg').animate({'height': '544px'},600);
    $('#resumeButton').show(); 
});

$('#resumeButton').click(function() { 
    $('#flash').cycle('resume', true);
    $(this).hide();
    $('#flash').show('slow');
    $('#holder').css('margin-top','0');
    $('#bg').animate({'height': '653px'},600);
    $('#pauseButton').show();
});

$('#frame').hide();
$.ajaxSetup({cache:false});
	$("#menu-second-menu .menu-item a, #menu-first-menu .menu-item a").click(function(){
		var post_id = $(this).attr("href");
		$("#frame").html("laster...");
		$("#frame").load(post_id);
		$("#frame").fadeIn('slow');
		return false;
	});

});

