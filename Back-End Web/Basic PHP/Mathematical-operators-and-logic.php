<?php

	$number1 = 10;
	$number2 = '11';

	//Mathematical operators.

	/*

	if($number1 < $number2){
		//Run this action.
	}else{
	
	}

	if($number1 <= $number2){
		echo 'run';
	}


	if($number1 > $number2){
		//Run this action.
	}else{
	
	}

	if($number1 >= $number2){
		echo 'run';
	}

	*/

	//----------------------------------------------------//


	$var1 = 'value1';
	$var2 = 'value2';
	$var3 = 'value1';
	//$var2 = 'value2';
	//$var3 = 'value3';

	//----------------------------------------------------//

	//LOGIC OPERATOR 'AND'


	/*

	if(($var1 == $var2) && ($var2 == $var3 )){
		echo 'true';
	}else{
		echo 'The variables do not have the same value';
	}

	*/

	//----------------------------------------------------//

	//LOGIC OPERATOR 'OR'

	/*

	if($var1 == $var2 || $var1 == $var3){
		echo 'true';
	}

	*/


	//----------------------------------------------------//


	//LOGIC OPERATOR 'AND' + 'OR'

	//IN THIS CASE, IT IS FALSE. THEN, SHOW A WHITE SCREEN.
	

	if(($var1 == $var2 || $var1 == $var3) && $var1 == $var2 ){
		echo 'true';
	}


?>