<?php
	$pdo = new PDO('mysql:host=localhost;dbname=pdo_dataobject','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$sql = $pdo->prepare("SELECT * FROM `clients` RIGHT JOIN `offices` ON `clients`.`office` = `offices`.`id`");
	$sql = $pdo->prepare("SELECT * FROM `clients` LEFT JOIN `offices` ON `clients`.`office` = `offices`.`id`");
	//$sql = $pdo->prepare("SELECT * FROM `clients` RIGHT JOIN `offices` ON `clients`.`office` = `offices`.`id`");
	
	$sql->execute();
	$clients = $sql->fetchAll();
	foreach ($clients as $key => $value) {
		echo $value['name'];
		echo '  | ';
		echo $value['name_office'];
		echo '<hr>';
	}
?>