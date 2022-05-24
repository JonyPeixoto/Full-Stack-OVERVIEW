<?php
	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	$select = $pdo->prepare("SELECT * FROM movies WHERE category_id = (SELECT category_id FROM categories WHERE name = 'horror')");

	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>