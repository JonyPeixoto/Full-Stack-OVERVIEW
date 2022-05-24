<?php
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=firstclass_pdo_dataobject','root','');

	if(isset($_POST['action'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$record_time = date('Y-m-d H:i:s');

		// THE QUERY 'INSERT INTO = IT IS A COMMAND THAT WE USE '

		// OBSERVATION

		// THE COMMAND BELOW AVOID 'SQL INJECTOR', USING INTERROGATION POINT, BUT IT IS NOT TOTALLY SAFE (BEFORE HTML CODE)

		$sql = $pdo->prepare("INSERT INTO `clients` VALUES (null,?,?,?)");

		$sql->execute(array($name,$surname,$record_time));
		echo 'Client successfully inserted!';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bank registration</title>
</head>
<body>
<form method="post">
	<input type="text" name="name" required />
	<input type="text" name="surname" required />
	<input type="submit" name="action" value="Send!" />
</form>
</body>
</html>