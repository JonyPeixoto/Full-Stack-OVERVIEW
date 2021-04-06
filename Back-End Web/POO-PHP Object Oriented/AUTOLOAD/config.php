<?php

	function myAutoLoad($class){
		
	//CONFLICT USING LINUX (DO NOT HAPPEN ON WINDOWS) FOR PUT ONLINE WEBSITE WITH THE COMMAND:

		/*

		$CLASS = STR_REPLACE('\\', '/',$CLASS);

		*/

		$class = str_replace('\\', '/',$class);
		if(file_exists('classes/'.$class.'.php')){
			include('classes/'.$class.'.php');
		}
	}

	// REGISTERING THE FUNCTION

	spl_autoload_register('myAutoLoad');

?>