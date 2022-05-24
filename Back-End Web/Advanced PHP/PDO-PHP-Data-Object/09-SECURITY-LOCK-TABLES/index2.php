<?php
	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');


	$sql->execute();

	$users = $sql->fetchAll();
	foreach ($users as $key => $value) {
		echo $value['name'];
		echo '<hr>';
	}
?>