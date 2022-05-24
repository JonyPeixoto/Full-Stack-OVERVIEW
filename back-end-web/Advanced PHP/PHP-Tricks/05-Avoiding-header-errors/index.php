<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>Hello world</p>
<?php
    header('location: https://google.com');
    die();
?>
</body>
</html>

<?php
  ob_end_flush();  
?>