<?php

	/*------ NORMAL SYNTAX ---------*/


		/* USING IF */

	/*

	$name = 'Jonathan';

	if($name == 'Jonathan'){
		echo 'True';


		/* USING WHILE */

	/*


		$counter = 0;
	while($counter < 10){

		$counter++;
		echo 'hello';
		echo '<br />';
	}


	*/


		/* USING FOREACH */


	/*

	$array = array();
	foreach ($array as $key => $value) {
		
	}

	for($i=0;$i<10;$i++){
		//Here, the code!
	}

	
	*/



	/*----- ALTERNATIVE SYNTAX - IT IS ENOUGH USED IN WORDPRESS -----*/


		/* USING IF */


	/*

	$name = 'Jonathan';

	if($name == 'Jonathan'):
		echo 'True';
	endif;
		echo '<br />';

	*/


		/* USING WHILE */


	/*

	$counter = 0;
	while($counter < 10):

		$counter++;
		echo 'hello';
		echo '<br />';
	
	endwhile;

	*/


	/* USING FOREACH, FOR */

	$array = array();
	foreach ($array as $key => $value):
		
	endforeach;

	for($i=0;$i<10;$i++):
		//Here, the code!
	endfor;

?>