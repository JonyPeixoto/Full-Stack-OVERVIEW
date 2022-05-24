<?php

	// abstract - THIS CLASS IS JUST TO BE CALLED as ''daughter class'', THIS CLASS CANNOT BE INSTANTIATED

	abstract class test{

		public function func1(){
			echo 'calling function1';
		}

		abstract function func2();


	}

	class Principal2{

		public static function otherStaticMethod(){
			echo 'My other method';
		}

	}

	class Principal extends test{


		public function func2(){
			echo 'I am declaring officially an abstract method';
		}

		public static function StaticMethod(){
			echo 'Static Method';
		}

		public function funciones(){
			//Principal::StaticMethod();
			//self::StaticMethod();
			$principal2 = new Principal2;
			Principal2::otherStaticMethod();
		}
	}

	$principal = new Principal;
	$principal->funciones();
	//Principal::StaticMethod();

	//$principal->func1();

	//$principal->func2();
?>