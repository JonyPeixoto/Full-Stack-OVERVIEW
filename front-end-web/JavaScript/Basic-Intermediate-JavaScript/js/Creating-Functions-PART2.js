window.onload = function(){

	/*--- EXERCISE 01 ---*/


	/*

	function makeAccount(num1,num2){
		console.log(num1);
		console.log(num2);
	}

	makeAccount(10,20);

	*/


	/*--- EXERCISE 02 ---*/


	/*

	function makeAccount(num1,num2){
		console.log(num1+num2);
	}

	makeAccount(10,20);

	*/



	/*--- EXERCISE 03 ---*/



	/*

	function makeAccount(num1,num2){
		if(num1 == 10){
			console.log("My number 1 is equal to 10");
		}
	}

	makeAccount(10,20);

	*/



	/*--- EXERCISE 04 ---*/



	/*

	var test = 'Jony';

	function makeAccount(){
		test = 'Jenny';
		console.log(test);
	}

	makeAccount();

	*/



	/*--- EXERCISE 05 ---*/



	/*

	function makeAccount(num1,num2){
		//return num1+num2;
		//return false;
		//return true;
		//return "Jony";

		

		var name = "Jony";
		return name;

		
	}

	var result = makeAccount(10,10);

	console.log(result);

	*/



	/*--- EXERCISE 06 ---*/

	/*

	var variable = function(){
		console.log("My function through the variable");
	};

	//variable();
	console.log(typeof(variable));

	*/



	/*--- EXERCISE 07 ---*/


	/*


	var obj = {'name':'Jony','age':24,'func':function(){
		console.log("Jony");
	}};

	obj.func();

	*/



	/*--- EXERCISE 08 -- FUNCTION INSIDE OBJECT ---*/


	/*

	var obj = {'name':'Jony','age':24};	

	obj.func = function(){
		console.log('my function');
	}

	obj.func();

	*/



	/*--- EXERCISE 09 -- OBJECT INSIDE OBJECT ---*/

	/*

	var variable = [];

	variable[0] = [];

	variable[0][2] = 'Jony';

	console.log(variable[0][2]);

	*/



	/*--- EXERCISE 10 -- OBJECT INSIDE OBJECT ---*/


	var variable = [];

	variable.obj = {};

	variable.obj.name = 'Jony';

	console.log(variable.obj.name);

}