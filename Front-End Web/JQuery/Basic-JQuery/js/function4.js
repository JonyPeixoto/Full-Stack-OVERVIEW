$(function(){

	/*--- CLICK AND CHANGE THE COLOR OF THE ELEMENT ---*/

	function validateClickHover (){

		$('.article1').click(function(){
			$('.article2').css('background-color','purple');
		});

		/*--- EFFECT HOVER ---*/

		$('.article1').hover(function(){
			$('.article2').css('background-color','red');
		},function(){
			$('.article2').css('background-color',' rgb(100,100,100)');
		})

	}

	/*--- EFFECT FOCUS ---*/
	//Executes some function when there is focus on the element.

	/*

	$('textarea').focus(function(){
		console.log('I am inside the textarea!');
	})

	*/

	/*--- EFFECT BLUR ---*/
	//Perform some function when we remove focus from the element.


	/*

	$('textarea').blur(function(){
		console.log('I am out of the textarea!');
	})

	*/


	function validateForm(){

		/*--- FOCUS + BLUR ---*/

		$('textarea').focus(function(){
			//Executes some function when there is focus on the element.
			console.log("Focus!");
		}).blur(function(){
			//Perform some function when we remove focus from the element.
			console.log("Remove Focus!");
		})

		$('select').change(function(){
			console.log("My select was changed!");
		})
	}

	validateForm();
	validateClickHover();



});

