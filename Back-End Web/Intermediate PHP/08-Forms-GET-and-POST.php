<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php

	/*----- EXAMPLE GET SUBMIT WITH URL ------*/

		/*

		if(isset($_GET['action'])){
			$name = @$_GET['name'];
			$email = @$_GET['email'];
			echo $name;
			echo '<br />';
			echo $email;
		}

		*/


	/*-------- EXAMPLE 1 POST - SUBMIT WITHOUT URL


	if(isset($_POST['action'])){
			$name = @$_POST['name']
			$email = @$_POST['email'];
			echo $name;
			echo '<br />';
			echo $email;
		}

	?>
	<form method="post">
		<input type="text" name="name" />
		<input type="text" name="email" />
		<input type="submit" name="action" value="Send" />

	</form>

	*/



	/*--------- EXAMPLE 2 POST - CALCULATOR

		if(isset($_POST['action'])){
			echo$_POST['number1'] + $_POST['number2'];
		}
	?>
	<form method="post">
		<input type="text" name="number1" />
		<input type="text" name="number2" />
		<input type="submit" name="action" value="Send" />

	</form>


	*/


	/*---------- EXAMPLE 3 POST -----------*/

	/*

	if(isset($_POST['action'])){
			echo $_POST['name'];
	}



	?>
	<form method="post">
		<select name="name">
			<option value="Jony">Jony</option>
			<option value="Thay">Thay</option>
		</select>
		<input type="submit" name="action" value="Send" />
	</form>


	*/



	/*---------- EXAMPLE 4 - POST + ARRAYS ----*/

	/*

	if(isset($_POST['action'])){
		foreach ($_POST['value'] as $key => $value) {
			echo $key;
			echo '=>';
			echo $value;

			echo '<hr>';


		}
	}

	*/

	?>
	<form method="post">
		<select name="name">
			<option value="Jony">Jony</option>
			<option value="Thay">Thay</option>
		</select>
		<input type="checkbox" name="value[]" value="10">10
		<input type="checkbox" name="value[]" value="20">20
		<input type="checkbox" name="value[]" value="30">30
		<input type="checkbox" name="value[]" value="40">40
		<input type="submit" name="action" value="Send" />
	</form>
</body>
</html>