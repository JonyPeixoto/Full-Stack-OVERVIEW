$(function(){

	/*--------- USING WIDTH ---------*/

	//We take the width of our element.
	$('.box').width();



	//We set the width of the element.
	$('.box').css('width','900px');
	$('.box').css('height','700px');


	// Width/heigh = total calculated dimension based on padding.
	// innerWidth / innerHeight = total calculated dimension INCLUDING the padding.
	// outerWidth / outerHeight = total calculated dimension INCLUDING the padding and margin(if the paramether is true).

	/*--- MANIPULATING THE WIDTH ---*/

	console.log("Width: "+$('.box').width());


	/*---------- USING INNERWIDTH ---------*/

	console.log("Inner Width: "+$('.box').innerWidth());



	/*---------- USING INNERWIDTH ---------*/

	console.log("Outer Width: "+$('.box').outerWidth(true));




	/*--- MANIPULATING THE HEIGHT ---*/

	console.log("Height: "+$('.box').height());


	/*---------- USING INNERHEIGTH ---------*/

	console.log("Inner Height: "+$('.box').innerHeight());



	/*---------- USING INNERHEIGTH ---------*/

	console.log("Outer Height: "+$('.box').outerHeight(true));


});