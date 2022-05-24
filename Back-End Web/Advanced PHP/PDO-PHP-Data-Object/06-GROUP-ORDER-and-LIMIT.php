<?php
	$pdo = new PDO('mysql:host=localhost;dbname=firstclass_pdo_dataobject','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	/*
	
	OBSERVATIONS: 


	1) GROUP BY, ORDER BY AND ALIMIT ARE NOT DEPENDENTS
	2) THERE IS A ORDER FOR USE GROUP BY, ORDER BY AND LIMIT

		FIRST) GROUP BY
		SECOND) ORDER BY
		THIRD) LIMIT

	3) WHEN WE 2 ELEMENTS, IT IS NOT MAKE SENSE USE: GROUP BY

	*/


	//$sql = $pdo->prepare("SELECT * FROM `clients2` GROUP BY office LIMIT 3");
	//$sql = $pdo->prepare("SELECT * FROM `clients2` office ORDER BY name ASC LIMIT 3");

	$sql = $pdo->prepare("SELECT * FROM `clients2` ORDER BY name ASC LIMIT 1	,3");
	$sql->execute();
	$clients = $sql->fetchAll();
	foreach ($clients as $key => $value) {


		echo $value['name'];
		echo '<hr>';


	}
?>