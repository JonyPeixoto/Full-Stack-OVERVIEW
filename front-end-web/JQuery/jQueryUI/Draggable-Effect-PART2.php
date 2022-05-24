<!DOCTYPE html>
<html>
<head>
	<title>jQuery UI Draggable Effect</title>
	<link href="css/jquery-ui.css" rel="stylesheet">
		<style>
			  div {
			    width: 100px;
			    height: 100px;
			    background: #ccc;
			    border: 1px solid #000;
			  }
	  	</style>	
</head>
<body>

<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
$( document ).click(function() {
  $( "div" ).draggable();
});
</script>

</body>
</html>