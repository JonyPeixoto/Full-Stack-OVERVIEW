<?php

	include('Interface-implements-PART-2.php');

	class Test implements Interface1{

		public function printOnScreen($par){
			echo $par;
		}

	}

	$test = new Test;

	$test->printOnScreen('Hello world');

?>