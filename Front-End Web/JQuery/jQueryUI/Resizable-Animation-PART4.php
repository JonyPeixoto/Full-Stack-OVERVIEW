<!DOCTYPE html>
<html>
<head>
	<title>jQuery UI</title>
	<link href="css/jquery-ui.css" rel="stylesheet">
		<style>
		  .box{
        width: 100px;
        height: 100px;
        border: 1px solid #ccc;
      }
  	</style>	
</head>
<body>

<div class="box ui-widget-content"></div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
$( function() {
   //Resizable
   $('.box').resizable({
      animate:true
   });

   $('.box').draggable();

});
</script>

</body>
</html>