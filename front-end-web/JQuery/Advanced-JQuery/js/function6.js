$(function(){

	$('.form_contact').submit(function(){

		var container = $('.container');
		var content = "Name: "+ $('input[name=name]').val() + 
		'<hr>E-mail: '+ $('input[name=email]').val() +
		'<hr>Cellphone: ' + $('input[name=cellphone]').val();

		container.html(content);
		return false;

	})

});