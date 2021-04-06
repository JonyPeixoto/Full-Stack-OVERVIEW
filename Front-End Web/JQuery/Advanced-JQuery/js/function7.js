$(function(){

	/*--- USING FADE IN ---*/

	/*

	$('.box1').fadeOut(2000,function(){
		$('.box2').fadeIn(1000,function(){
			console.log("We finished our animation!");
		});
	});

	*/



	/*--- USING SLIDE TOGGLE ---*/

	$('.box1').click(function(){
		$('.box2').slideToggle(4000,function(){
			location.href="https://www.google.com";
		});
	})

});