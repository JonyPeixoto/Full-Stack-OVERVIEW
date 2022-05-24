$(function(){


	/*--- FUNCTIONS JAVASCRIPT ---*/

	/*--- PART 1

	var el = $('.box');

	var mytext = 'Hello world!';
	el.html("<div class=\"test\">"+mytext+"</div>");

	// OR - USING SIMPLE QUOTATION MARKS

	//el.html('<div class="test">My element!</div>');
	el.html(el.html() + '<h1 class="text1">My text via javascript!</h1>');

	$('.box2').text("<div></div>");
	$('.box2').text($('.box2').text() + "Hello world!");

	$('input[type=text]').val("Hello world!");

	$('textarea').text("Hello world");

	---*/



	/*--- PART 2 - OTHER FUNCTIONS---*/

	/*

	$('input[type=button]').click(function(){
		var str = $('input[type=text]').val();

		//Split separate our string based on the delimiter.
		//var var2 = v.split("@");
		//console.log(var2);

		//Substr cut out string.
		//console.log(str.substr(1,4));

		var splitstr = str.split('@');

		if(splitstr[1] == 'gmail.com'){
			$('input[type=text]').css('opacity','0');
		}else{
			console.log("The condition did not match!");
		}
	})	

	*/


	/*---- PART 3 ---*/

	$('input[type=button]').click(function(){
		var str = $('input[type=text]').val();

	console.log(str.trim());

	// YOU CAN COMPARE THE BLANK SPACES OF THE FUNCTION ABOVE USING THE FUNCTION...
	//console.log(str);

	})

});