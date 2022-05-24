<?php

	/*------------CREATING AN FUNCTION--------------*/

	/*

	function showName($name,$age){
		echo '<h2>My name is: </h2>'.$name;
		echo '<hr>';
		echo "Age: $age";
	}

	showName('Thay',18); 

	*/



	/*------------NATIVE FUNCTION------------*/


	/* EXAMPLE 1 */

	/*

	function calculator($number1 = 10,$number2 = 5){
		echo ($number1+$number2);
		echo ('<hr>');
	}

	calculator();
	calculator(20,30)

	*/


	/* EXAMPLE 2 */


	function returnStrings(){
		return 'Jonathan';
	}

	echo returnStrings();


?>