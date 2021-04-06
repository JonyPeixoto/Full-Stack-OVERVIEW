<?php

	$value = 10;
	//$value2 = '10';
	//$value2 = 10;
	//$value2 = 9;
	$value2 = '10';

	/*
	$name = 'Jony';
	$name2 = 'Jonathan';
	*/

	//An signal of equal, it means that we are assigning a value.
	//It always returns true.
	/*
	if($name = $name2){
		echo 'true';
	}
	*/

	//---------------------------------------------------------------//

	//Only check if the value is equal.

	/*
	if($name == $name2){
		echo 'true';
	}

	//We check to see if it's different.
	if($name != $name2){
		echo 'It is different';
	}
	*/

	//---------------------------------------------------------------//

	//Check if the variables are the same value and the same type

	/*

	if($value === $value2){
		echo 'true';
	}else{
		echo 'They are not identical';
	}

	if($value == $value2){
		echo 'true';
	}

	*/

	//--------------------------------------------------------------//

	//Check if the variables are different(type and value)

	if($value !== $value2){
		echo 'true';
	}


?>