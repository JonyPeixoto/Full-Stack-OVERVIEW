$(function(){

	//Functions that open and close form 

	openWindow();
	verifyClickClose();

	function openWindow(){
		$('.btn').click(function(e){
			e.stopPropagation();
			$('.bg').fadeIn();
			// OR

			// $('.bg').show();

		});
	}

	function verifyClickClose(){

		var el = $('body,.closeBtn');

		el.click(function(){
			$('.bg').fadeOut();
		})

		$('.form').click(function(e){
			e.stopPropagation();
		})

	}


	/*--- Form events = VALIDATING THE FORM ---*/

		$('input[type=text]').focus(function(){
		resetInvalidField($(this));
	})


	$('form#form1').submit(function(e){
		//e.preventDefault();
		var name = $('input[name=name]').val();
		var cellphone = $('input[name=cellphone]').val();
		var email = $('input[name=email]').val();

		if(checkName(name) == false){
			applyInvalidField($('input[name=name]'));
			return false;
		}else if(checkCellphone(cellphone) == false){
			applyInvalidField($('input[name=cellphone]'));
			return false;
		}else if(checkEmail(email) == false){
			applyInvalidField($('input[name=email]'));
			return false;
		}else{
			alert("Form successfully sent!");
		}

		//If you got to the end, it's all okay!
	})

	/*****/


	//Functions to style the form field

	function applyInvalidField(el){
		el.css('color','red');
		el.css('border','2px solid red');
		el.val('Invalid Field!');
		//el.data('invalid','true');
	}

	function resetInvalidField(el){
		el.css('color','#ccc');
		el.css('border','1px solid #ccc');
		el.val('');
	}


	//Functions to check our fields

		function checkName(name){


		//Counting the amount of space and the respective values.
		if(name == ''){
			return false;
		}
		var amount = name.split(' ').length;
		var splitStr = name.split(' ');
			if(amount >= 2){
				for(var i = 0; i < amount; i++){
					if(splitStr[i].match(/^[A-Z]{1}[a-z]{1,}$/)){

					}else{
						return false;
					}
				}
			}else{
				return false;
			}

		}

		function checkCellphone(cellphone){
			if(cellphone == ''){
				return false;
			}

			if(cellphone.match(/^\([0-9]{2}\)[0-9]{5}-[0-9]{4}$/) == null){
				return false;
			}

		}

		function checkEmail(email){
			if(email == '')
				return false

			if(email.match(/^([a-z0-9-_.]{1,})+@+([a-z.]{1,})$/) == null){
				return false;
			}

		}


});