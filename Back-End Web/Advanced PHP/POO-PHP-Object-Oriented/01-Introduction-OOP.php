<?php

	class Person{
		//Person = OBJECT

		private $name = 'Jonathan';
		private $age = '24';
		private $weight = '79kg';

		public function grow(){
			$this->eat();
			echo 'I am growing';
		}
	
		private function eat(){
			echo 'I am eating';
		}

	}

	class Person2{
		//Person = ANOTHER OBJECT

		private $name = 'Jenny';
		private $age = '18';
		private $weight = '55kg';

		private function grow(){
			echo 'I am growing';
		}
	
		private function takeashower(){
			echo 'I am taking a shower';
		}

	}

	//IN OBJECT ORIENTATION, WE MUST INSTANTIATE FOR CALL ALL THE ATTRIBUTES AND METHODS ABOVE:

	//CALL THE ATTRIBUTES = ACCESS THE ATTRIBUTES:

	$person = new Person;
	$person2 = new Person;

	// IN THE VARIABLE $PERSON ABOVE, IT WILL HAVE ALL THE ACCESS OF THE CLASS Person


	//CALL THE METHODS = ACCESS THE METHODS:


	$person->grow();
	//$person->eat();


	//$person2->grow();
	//$person2->takeashower();

?>

