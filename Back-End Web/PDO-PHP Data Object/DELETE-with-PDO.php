<?php

	$pdo = new PDO('mysql:host=localhost;dbname=firstclass_pdo_dataobject','root','');


	$id = 5;


	/*----- SUBSTITUTE 1 DATA OF THE TABLE -----*/


	//$sql = $pdo->prepare("UPDATE `clients` SET name='Mario',surname='Mendes' WHERE id=$id");


	/*----- USING 'AND' -----*/
	

	//$sql = $pdo->prepare("UPDATE `clients` SET name='Jony',surname='Peixoto' WHERE name='Mario' AND surname='Mendes'");


	/*----- USING 'OR' -----*/



	// OBSERVATION

	// THE COMMAND BELOW AVOID 'SQL INJECTOR', USING INTERROGATION POINT, BUT IT IS NOT TOTALLY SAFE (BEFORE HTML CODE)


	$sql = $pdo->prepare("DELETE FROM `clients` WHERE id=?");

	if($sql->execute(array($id))){
		echo 'My client has been successfully deleted!';
	}

?>