$(function(){

	/*--- FUNCTION ADDCLASS / REMOVECLASS ---*/

	$('.box1').addClass('myclass');

	/*--- REMOVE THE CLASS ---*/

	//$('.myclass').remove();

	$('.box1').removeClass('myclass');


	/*--- FUNCTION FIND / FUNCTION PERSONALIZED OR TAG PERSONALIZED ---*/

	var el = $('.box1').find('.child1').find('.child2');

	el.css('color','blue');

	$('mytag').attr('myattr','othervalue');

	alert($('mytag').attr('myattr'));


});