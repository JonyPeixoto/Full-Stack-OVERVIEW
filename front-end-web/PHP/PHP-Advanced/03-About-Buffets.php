<!--

EXAMPLE 01 - OB_START / OB_END_FLUSH

<?php
    //Send requisition to PHP
    //ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<h2>my content</h2>
</body>
</html>

<?php
    // Come back all the information for me (PHP -> ME)
    //ob_end_flush();
?>

-->


<!-- EXAMPLE 02 -  OB_END_CLEAN -->


<?php
    //Send requisition to PHP
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
<h2>my content</h2>
</body>
</html>

<?php 
    // BUFFET CLEAN
    $n = ob_get_contents();
    ob_end_clean();

    // SHOW THE BUFFET CLEAN
    //echo $n;
?>