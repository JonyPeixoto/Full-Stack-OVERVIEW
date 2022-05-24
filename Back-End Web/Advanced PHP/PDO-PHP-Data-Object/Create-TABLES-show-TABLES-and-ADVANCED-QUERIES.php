<?php
	$pdo = new PDO('mysql:host=localhost;dbname=pdo_phpdataobject','root','');

	/*------ SHOW TABLES in PHP-----*/


	/*

	$tables = $pdo->query("SHOW TABLES");
	$tables = $tables->fetchAll();

	echo '<pre>';
	print_r($tables);
	echo '</pre>';

	*/


	/*--- CREATING TABLES in PHP ---*/

	$sql = 'CREATE TABLE courses (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name_course VARCHAR(30) NOT NULL 
	)';

	$pdo->exec($sql);


	/* OTHER DATAS - IT IS NOT NECESSARY

	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50)
	reg_date TIMESTAM

	*/

	



	

?>
