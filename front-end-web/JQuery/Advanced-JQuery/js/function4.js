$(function(){


	/*--- FUNCTION APPEND = ADDED CONTENT/ELEMENT IN THE FINAL ELEMENT THAT WE WILL SELECT ---*/

	//$('.box').append('<h3>My element added dinamically</h3>');


	// CASE 01 - FUNCTION APPEND:

	/*--- FUNCTION EQ THAT ADDED SPECIFY CONTENT ONLY 1 ELEMENT --*/

	//$('.box').eq(0).append('<h3>My element added dinamically</h3>');
	//$('.box').eq(1).append('<h3>My element added dinamically</h3>');



	//CASE 02 - FUNCTION APPEND:

	/*--- FUNCTION APPEND INSIDE DIV ---*/

	//$('.box div').append('<h3>My element added dinamically</h3>');
	//$('.box div').eq(0).append('<h3>My element added dinamically</h3>');



	//CASE 03 - FUNCTION APPEND:

	/*--- FUNCTION ADDED A FINAL CONTENT AND AFTER YOU WANT TO MANIPULATE THIS CONTENT ON CSS ---*/

	//var el = $('<h3>My content</h3>').appendTo($('.box')).css('color','blue');

	//el.css('color','blue');



	// OR

	//var el = $('<h3>My content</h3>').appendTo($('.box')).css('color','blue');




	//CASE 04 - FUNCTION APPEND:

	/*--- FUNCTION ADDED A START CONTENT AND AFTER YOU WANT TO MANIPULATE THIS CONTENT ON CSS ---*/

	//$('.box').prepend('<h3>Hello world!</h3>');



	// OR

	//var el = $('<h3>My content</h3>').prependTo($('.box')).css('color','blue');




	//CASE 05: FUNCTION APPEND:

	/*--- FUNCTION ADDED A PARAGRAPH ON THE FINAL PAGE AFTER/BEFORE DIV BOX ---*/


	/*

	var t = '<p>My content after div box</p>';
	$('.box').after(t);	

	$('.box').before(t);

	*/


	/*-- MANIPULATING ELEMENTS USING CSS --*/

	//$(t).insertAfter($('.box')).css('color','blue');
	//$(t).insertBefore($('.box')).css('color','blue');



	//CASE 06: FUNCTION APPEND:

	/*--- FUNCTION REMOVE ELEMENTS, FOR EXAMPLE, DIV BOX ---*/

	setTimeout(function(){
		$('.box').eq(1).remove();
	},3000);

	// ORIGINAL FUNCTION WITHOUT TIMER OF 3 SECONDS:
	
	//$('.box').eq(1).remove();


});