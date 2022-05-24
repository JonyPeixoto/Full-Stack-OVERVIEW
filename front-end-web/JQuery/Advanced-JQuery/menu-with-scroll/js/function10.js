$(function(){

	var el = $('#source .text').clone();

	/*--- MOVE THE OBJECT (TEXT: Hello world!) ---*/


	$('#source .text').appendTo('#container');


	/*--- CLONE THE OBJECT (TEXT: Hello world!) ---*/

	//el.appendTo('#container');
	//$('#container').html(el.html());

});