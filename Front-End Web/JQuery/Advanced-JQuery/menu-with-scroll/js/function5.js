$(function(){

	/*--- EVENT: CLICK, ON ---*/

	/*

	$('a').click(function(){
		alert('Hello world!');
	});

	$('body').on('click','a',function(){
		alert('Hello world');
		return false;
	});

	setTimeout(function(){
		$('body').html('<a href="">My link!</a>');
	},3000)

	*/


	/*--- EVENT: KEYUP, KEYDOWN - IT IS THE MOST USED ON FORMS ---*/


	var func = function(){
		var id = $(this).index();
		$('input[type=text]').eq(id).css('background','green');
		//console.log($(this).index());
	}

	/*
	$('input[type=text]').keyup(func);
	*/

	$('input[type=text]').keydown(func);

});