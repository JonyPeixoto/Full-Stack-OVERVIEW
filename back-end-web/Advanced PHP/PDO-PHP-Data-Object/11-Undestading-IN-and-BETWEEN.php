<?php

	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	/*--------- USING IN ----------*/


	/*---- EXAMPLE 01 ----*/

	$sql = $pdo->prepare("SELECT * FROM clients WHERE id IN (1,10)");



	/*---- EXAMPLE 02 ----*/

	//$sql = $pdo->prepare("SELECT * FROM clients WHERE id IN (1,2,3)");



	/*---------- USING BETWEEN ------------*/

	//$sql = $pdo->prepare("SELECT * FROM clients WHERE date BETWEEN '2020-11-18' AND '2020-11-26'");

	$sql->execute();


	$emails = $sql->fetchAll();

	print_r($emails);

	// RETURNING ONLY 1 EMAIL

	//echo $sql->fetch()['email'];

?>