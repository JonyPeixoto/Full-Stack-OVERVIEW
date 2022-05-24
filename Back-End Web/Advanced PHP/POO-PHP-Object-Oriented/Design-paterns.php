<?php

	/*----- PATERN 1 - FACTORY DESIGN PATERN - FACTORY OR SINGLE FACTORY -----*/


/*	

	class Dog
	{
		
		public function __construct(){
			echo 'dog class';
		}
	}

	class Cat
	{
		public function __construct(){
			echo 'cat class';
		}
	}

	/* NORMALLY, WE USE ANOTHER STATIC METHOD AND MANUFACTURES (INSIDE STATIC METHOD) A CLASS */

	//new Dog;


	//SEE THE EXAMPLE:


/*
	class Animal{

		public static function build($className){
			if(class_exists($className)){
				return new $className;
		}else{
			die('Ops! There is not class!');
		}
	  }

	}

	Animal::build('fish');

	//Animal::build('dog');
	//Animal::build('cat');


*/


	/*----- PATERN 2 - FACADE DESIGN PATERN -----*/


	// 1 CLASS FOR EACH ACTION ON VIRTUAL STORE

	// ADD/CLOSE CART - CART (CLASS)
	// CALCULATE FREIGHT - FREIGHT (CLASS)
	// CLOSE ORDER - ORDER (CLASS)

	class Cart{
		public function closeCart(){
			echo 'Closed Cart';
		}
	}

	class Freight{
		public function calculateFreight(){

		}
	}

	class Order{
		public function closeOrder(){

		}
	}

	/* FACADE */

	class Store{
		public function checkOut(){
			$this->closeCart();
			$this->calculateFreight();
			$this->closeOrder();
		}

		public function closeCart(){
			$cart = new Cart();
			$cart->closeCart();
		}


		public function closeFreight(){
			$freight = new Freight();
			$freight->closeFreight();
		}


		public function closeOrder(){
			$order = new Order();
			$order->closeOrder();
		}

	}

	/* FACADE */

	$store = new Store();
	$store->checkOut(); 
?>