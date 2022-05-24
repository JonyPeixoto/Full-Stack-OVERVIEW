<?php
	define('HOST','localhost');
	define('DB','pdo_phpdataobject');
	define('USER','root');
	define('PASS','');

	//SYSTEM TO HAVE MORE SECURITY WHEN TRYING TO CONNECT WITH THE DATABASE

	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo '<h1>erro ao conectar</h1>';
	}


	/*---- SHOW ERROR ON SCREEN ----*/

	/*

	$sql = $pdo->prepare("SELECT * FROM posts9");
	$sql->execute();

	*/

?>