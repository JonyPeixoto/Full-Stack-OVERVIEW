<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<title>jQuery Mobile Introduction</title>
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
		$('.box').on('swipe',function(){
			$('.box').css('background','red');
		})
	})
</script>
</body>
</html>