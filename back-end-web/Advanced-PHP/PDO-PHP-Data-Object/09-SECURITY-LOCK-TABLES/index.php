<?php
	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	//	THE COMMAND 'LOCK TABLES' = AVOID CONFLICT IN DATA BASE WHEN WE INSERT INFORMATION IN DATA BASES
	
	$pdo->exec("LOCK TABLES `tb_admin.users` WRITE");

	sleep(10);
?>
