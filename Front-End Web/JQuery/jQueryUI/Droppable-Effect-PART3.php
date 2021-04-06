<!DOCTYPE html>
<html>
<head>
	<title>jQuery UI Draggable And Droppable Effects</title>
	<link href="css/jquery-ui.css" rel="stylesheet">
		<style>
		  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
		  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  		</style>	
</head>
<body>

<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>Drop here</p>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
      	/*
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
		*/
		alert('Some object fell in here!');
      }
    });
  	} );
</script>

</body>
</html>