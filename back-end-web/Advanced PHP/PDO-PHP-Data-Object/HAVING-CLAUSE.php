<?php

	//CLAUSE IS SIMILAR TO WHERE

	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	$select =  $pdo->prepare("SELECT * FROM clients GROUP BY office HAVING points > 5");;

	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>