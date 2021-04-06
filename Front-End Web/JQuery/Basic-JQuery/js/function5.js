$(function(){

	/*--- SCROLL ON THE PAGE ---*/

	/*

	$(window).scroll(function(){
		console.log("Scroll OK");
	})

	*/



	/*------------------- STUDIES 01 --------------

	var timer;


	$(window).scroll(function(){
		//Event when the scroll occurs.
	})

	/*--- EVENT: RESIZE, IT IS MOST USED TO RESPONSIVE DESIGN ---*/

//	$(window).resize(function(){
		//Event when we resize the screen.
		//console.log("My screen is being resized!")
//		clearTimeout(timer);
//		timer = setTimeout(function(){
//			location.href = "http://localhost/JQuery/OtherEvents.html";
//		},1000);
//	})




	/*--- EVENT: FUNCTION THAT IS CLICKING NOTHING HAPPENS ---*/

//	$('a').click(function(e){
		//e.preventDefault();

		// OR

//		return false; 		
//	})



/*--- EFFECT CLOSE WINDOW  ON THE PAGE ---*/


$('body').click(function(){
	$('.box').css('opacity','0.1');
})


$('.box').click(function(e){
	e.stopPropagation();
})



});