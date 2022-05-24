$(function(){

	/*--- ANIMATE / TIME OUT ---*/

	/*

	var timer;
	var timeOut = function(){

		$('.box2').animate({
		'width':'40%',
		'height':'500px',
		'marginLeft':'100px',
		'paddingTop':'200px'
		},2000);
	}

	$('body').click(function(){
		alert("Animation with timeout was canceled!");
		clearTimeout(timer);
	})

	$('.box1').animate({
		'width':'40%',
		'height':'500px',
		'marginLeft':'100px',
		'paddingTop':'200px'
	},2000,function(){
		timer = setTimeout(timeOut,3000);
	});


	*/


	/*--- INTERVAL = PERFORM THE SAME ACTION UNTIL CANCELED ---*/

	// It is most used on chats

	var timer;

	$('body').click(function(){
		console.log("Canceled interval");
		clearInterval(timer);
	})

	timer = setInterval(function(){
		alert('Hello world!');
	},3000);

});