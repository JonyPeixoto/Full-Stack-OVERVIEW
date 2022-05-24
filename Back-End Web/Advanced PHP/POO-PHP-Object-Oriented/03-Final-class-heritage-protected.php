<?php

	//final class daughter - IT IS A CLASS THAT CANNOT USED LIKE HERITAGE

	class daughter{


		/*
		protected function testFunction(){
			echo 'Calling test function';
		}
		*/

		private function testFunction(){
			echo 'Calling test function';
		}

		public function printHello(){
			$this->testFunction();
			echo '<br />';
			echo 'Hello world';
		}

	}

	class Father extends Daughter{

		public function printHello(){
		//PARENT = CALL THE ORIGINAL FUNCTION INSIDE OF THIS FUNCTION
			parent::printHello();
			echo '<br />';
			echo 'new function!';
		}

		public function printBye(){
			echo 'Bye World!';
			echo '<br />';
			$this->testFunction();
		}

	}

	//$father = new Father;

	//$father->printBye();

	$father = new Father;

	//$daughter->printHello();

	//$pai->printHello();

	//$father->printBye();
	$father->printHello();

?>