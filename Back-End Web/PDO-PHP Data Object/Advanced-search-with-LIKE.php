<?php

	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	$sql = $pdo->prepare("SELECT * FROM clients WHERE email LIKE '%j%'");

	$sql->execute();

	//RETURNING ALL THE EMAILS WITH THE LETTER 'J'



	$emails = $sql->fetchAll();

	print_r($emails);



	// RETURN ONLY 1 EMAIL

	//echo $sql->fetch()['email'];

?>