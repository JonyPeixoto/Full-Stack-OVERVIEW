$(function(){

	//$('.article1').css('background-color','#ccc');

	//$('#test').css('padding-left','20px').css('background-color','red');



	/*-- CSS + TIMER --*/


	/*
		setTimeout(function(){
			$('#test.article1').css('background-color','green');
		},2000);

	});


	*/



	/*-- CSS + + PARAGRAPH --*/


	/*


	setTimeout(function(){
				$('.article1 p').css('color','red');
			},2000);

		});


	*/


	/*-- EXPLORING THE PROPRIETY: CSS() --*/


		$('.article1 > p').css('color','rgba(0,0,0,0.6)');
		console.log($('.article1 > p').css('color'));

	});


	// OR

	// $('div').css('background-color','#ccc');


	/* WE USE SOME SPECIFICATIONS LIKE:

	WE CAN NOT USE:


	$('.article1').css('padding','20px').css('background-color','red');

	WE MUST USE:

	$('.article1').css('padding-left','20px').css('background-color','red');

	OR

	$('.article1').css('padding-right','20px').css('background-color','red');


	OR

	$('.article1').css('padding-bottom','20px').css('background-color','red');

	*/
	
