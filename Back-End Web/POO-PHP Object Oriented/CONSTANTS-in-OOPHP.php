<?php
	/* WITHOUT OBJECT-ORIENTED PHP, WE USE THIS FORM FOR DECLARE CONSTANTS: */

	/*

	define('CONSTANT','value');

	*/

	
	class myClass
	{
		const VALUE = 300;
		public function __construct(){
			echo self::VALUE;
		}
	}

	//SHOW THE CLASS WITH THE VALUE: 300:

	//new myClass;



	// CALLING THE CLASS OUTSIDE:

	echo myClass::VALUE;




	// OBSERVATIONS:


	/* A CONSTANT CAN BE NOT ALTERED FOR ONE VALUE


	echo self::900;

	//OR

	echo myClass::VALUE = 900;


	*/


?>