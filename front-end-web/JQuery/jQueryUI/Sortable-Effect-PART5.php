<!DOCTYPE html>
<html>
<head>
	<title>jQuery UI</title>
	<link href="css/jquery-ui.css" rel="stylesheet">
		<style>
		 #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
     #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
     .ui-state-highlight{
      background: red;
     }
  	</style>	
</head>
<body>

<ul id="sortable">
  <li class="ui-state-default">1</li>
  <li class="ui-state-default">2</li>
  <li class="ui-state-default">3</li>
  <li class="ui-state-default">4</li>
  <li class="ui-state-default">5</li>
  <li class="ui-state-default">6</li>
  <li class="ui-state-default">7</li>
  <li class="ui-state-default">8</li>
  <li class="ui-state-default">9</li>
  <li class="ui-state-default">10</li>
  <li class="ui-state-default">11</li>
  <li class="ui-state-default">12</li>
</ul>
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>

<script>
$( function() {
  $( "#sortable" ).sortable({
    placeholder: "ui-state-highlight"
  });
  $( "#sortable" ).disableSelection();
});
</script>

</body>
</html>