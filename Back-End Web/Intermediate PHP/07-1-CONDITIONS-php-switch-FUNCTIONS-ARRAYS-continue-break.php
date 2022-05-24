<?php

	/*-----CONDITION SWITCH and BREAK-----*/

	/*

	$name = 'Jonathan';

	switch($name){
		case 'Jonathan':
			echo 'My variable is Jonathan';
			break;
		case 'Thay':
			echo 'My variable is Thay';
			break;
	}	

	*/


	/*------BREAK------*/


	// EXAMPLE 1 - BREAK CAN BE USED FOR THE LOOP: FOR, WHILE, DO ,FOREACH
	// BREAK IS TOO USED FOR THE SWITCH;
	// CONTINUE CAN BE USED FOR THE LOOP: FOR, WHILE, DO AND FOREACH;

	

	for($i = 0; $i < 10; $i++){
		/*
		if($i == 5 || $i == 9)
			continue;
		*/

		echo $i;
		echo '<hr>';

		/*
		if($i == 5)
			break;
		*/
	}



	// EXAMPLE 2 - CONDITION IF 

	/*

	$var = false;

	if($var == true)
		$name = 'Jonathan';
		$age = '23';

		echo $age;
		echo '<br>';
		echo $name;

	*/
?>