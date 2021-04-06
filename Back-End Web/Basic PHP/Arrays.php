<?php

	/*Instead of you use several names, you can use the command ARRAY

	$name1 = 'Jane'
	$name2 = 'Jonathan'
	$name3 = 'Jennifer'

	*/

	//----------------------------------------------//


	/* Arrays = Variables with several keys: */

	//$name = array('Jane','Jonathan','Jennifer');


	//---------------------------------------------//


	/*Other form to define ARRAY: */

	// $name[] = '';

	//$name[] = 'Laura';

	//$name[] = 'Jonathan';

	//echo $name[1];


	//----------------------------------------------//

	/*Another form of define ARRAY*/


	//$variables = ['Jonathan','Jane','Jennifer','Giovanna'];
	//echo $variables[3];


	//---------------------------------------------//

	/*Another form of define ARRAY*/

	//$name[0] = 'Jonathan';
	//$name[100] = 'Magdalena';

	//echo $name[100];

	/*
	echo $name[1];
	echo $name[2];
	*/


	//----------------------------------------------//
	

	/*Another type of ARRAY*/

	//$variables = array('Jonathan',23,true,10.09);

	//echo $variables[3];


	//---------------------------------------------//

	/*Scheming ARRAY as index name*/

	$information['name'] = 'Jonathan';
	$information['age'] = 24;
	$information['city'] = 'Rio de Janeiro';

	echo $information['name'];
	echo '<br />';
	echo $information['age'];
	echo '<br />';
	echo $information['city'];
?>