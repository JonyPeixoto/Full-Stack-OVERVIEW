$(function(){

	// SOCIAL MEDIAS PLUGIN - JS SOCIALS
	
	$('#share').jsSocials({
          shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
	});

	// MASK PLUGIN(CELLPHONE,DATA,...)

	$('input[name=cellphone]').mask('(99)99999-9999');
	$('input[name=data]').mask('99/99/9999');


	// FANCY BOX PLUGIN

	$('a').fancybox({
		/*'openEffect':'elastic'*/
		'openEffect':'none',

		//NAVIGATION IMAGES ON THE PAGE	

		arrows:false
	});


});	