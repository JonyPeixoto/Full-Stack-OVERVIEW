<?php
	include('CLASS-EXAMPLE-Public-private-static.php');
	//Object instance

	$example = new Example();
	$example->setVar1('Jonathan');
	echo $example->takeVar1();
	//$example->var2 = 'Jonathan';
	echo '<hr />';
	$example2 = new Example;
	$example2->setVar1('Jony');
	echo $example2->takeVar1();
	//$example2->var2 = 'Jenny';

	/*
	echo $example->var2;
	echo '<br />';
	echo $example2->var2;
	*/

	//Example::$var3 = 'Other variable';
	//echo Example::$var3;

	//Example::StaticMethod();
?>