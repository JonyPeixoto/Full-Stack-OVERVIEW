$(function(){

	var el = $('div.box');

	el.css('background-color','green');

	function test(){
		el.css('color','blue');
	}

	test();

});