<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<title>jQuery Mobile - Swipe Settings</title>
	<style type="text/css">
		.box{
			width: 500px;
			height: 500px;
			background: green;
		}
	</style>
</head>
<body>
<div class="box"></div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
	$(function(){
		//Swipe settings!
		$.event.special.swipe.horizontalDistanceThreshold = 300;
		$.event.special.swipe.durationThreshold = 3000;

		/*--- SWIPE ---*/

		//$('.box').on('swipe',function(){
		//$('.box').on('swipeleft',function(){
		//$('.box').on('swiperight',function(){

		/******/


		/*--- TAP / TAPHOLD / TAPHOLDTHRESHOLD / VCLICK ---*/

		$.event.special.tap.tapholdThreshold = 3000;
		//$('.box').on('tap',function(){
		//$('.box').on('taphold',function(){
		$('.box').on('vclick',function(){


			$('.box').css('background','red');
		})
	})
</script>
</body>
</html>