<?php
	/**
	*	This class is example!
	*/


	//Public works anywhere
	//Private is only accessed within the class

	class Example
	{
		private $var1;
		public $var2;

		//public static $var3 = 'static';

		/*
		public function method(){

		}

		public static function StaticMethod(){
			echo 'Static Method';
		}

		private function method2(){

		}
		*/

		public function setVar1($var1){
			$this->var1 = $var1;

		}

		public function takeVar1(){
			return $this->var1;
		}

	}
?>