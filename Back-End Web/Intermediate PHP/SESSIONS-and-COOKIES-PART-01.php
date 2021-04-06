<?php

	/*------ ABOUT SESSIONS ------ CONTINUE ON 'SESSIONS-and-COOKIES-2' --------*/

	/*

	session_start();
	$_SESSION['name'] = 'Jonathan';
	$_SESSION['age'] = '24';

	*/



	/*---------- ABOUT COOKIES ----------*/

	/* USING THE FUNCTION COOKIE */	

	/*

	session_start();
	setcookie('name','Jonathan',time() + (60*60*24),'/');

		echo $_COOKIE['name'];

	*/



	/* COMMAND FOR DESTROY A COOKIE */


	session_start();
	setcookie('name','Jonathan',time() - (60*60*24),'/');
	
	echo $_COOKIE['name'];
?>
