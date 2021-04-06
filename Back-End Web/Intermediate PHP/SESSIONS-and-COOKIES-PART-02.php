<?php

	/* SHOW MY NAME IN 'SESSIONS-and-COOKIES', USE THE COMMAND BELOW: 

	session_start();
	echo $_SESSION['name'];

	*/


	/* COMMAND FOR CLEAR THE SESSION

	session_start();
	unset($_SESSION['name']);

	*/


	/* COMMAND FOR DESTROY SESSIONS */

	session_start();

	$_SESSION['name'] = 'Jony';
	$_SESSION[0]['name'] = 'Jony';
	session_destroy();

?>