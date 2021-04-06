<?php

	$pdo = new PDO('mysql:host=localhost;dbname=firstclass_pdo_dataobject','root','');


	$id = 3;


	/*----- SUBSTITUTE 1 DATA OF THE TABLE -----*/


	//$sql = $pdo->prepare("UPDATE `clients` SET name='Mario',surname='Mendes' WHERE id=$id");


	/*----- USING 'AND' -----*/
	

	//$sql = $pdo->prepare("UPDATE `clients` SET name='Jony',surname='Peixoto' WHERE name='Mario' AND surname='Mendes'");


	/*----- USING 'OR' -----*/

	$sql = $pdo->prepare("UPDATE `clients` SET name='Jonathan',surname='Peixoto' WHERE name='Mario' OR name='Jony'");

	if($sql->execute()){
		echo 'My client has been successfully updated!';
	}



	// OBSERVATION


	// WE CAN PROTECT THE CODE USING 'OR' USING INTERROGATION POINT IN THE SENTENCE


	/*

	
	$sql = $pdo->prepare("UPDATE `clients` SET name=?,surname=? WHERE name=? OR name=?");

	if($sql->execute(array(SOMETHING $ID, FOR EXAMPLE))){
		echo 'My client has been successfully updated!';
	}


	*/


?>