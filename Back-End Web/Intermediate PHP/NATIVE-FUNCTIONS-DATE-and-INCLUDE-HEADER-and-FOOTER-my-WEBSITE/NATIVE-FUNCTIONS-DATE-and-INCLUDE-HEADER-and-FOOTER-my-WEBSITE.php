<?php

	/*
		WORKING WITH DATES
	*/

		date_default_timezone_set('America/Sao_Paulo');

		/* FUNCTION DATE: SHOW NORMALLY THE HOUR ACCORDING TO THE AMERICA/SÃO PAULO

		$data = date('d/m/Y H:i:s');

		*/



		/* MODIFICATING THE MINUTES */

		/*

		$data = date('d/m/Y H:i:s',time()+(60*10));

		echo $data;

		*/
		$title_site = 'Title of the site';
		include ('header.php');

?>

<h1>My home content!</h1>

<?php

	include('footer.php');

?>