<?php
//1) Verify if there is 5 letters !
//2) (IF) Is there number ?
//3) (IF) Is there @ ?

//isset = Verify if there is = Variable have value or be created. 
if(isset($_POST['action'])){
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	if(strlen($name) >= 5){
		echo 'Our name has more or equal five letters!';
		echo '<br>';
	}

	if(is_numeric($number)){
		echo'It is number!';
		echo '<br>';
	}

	if(strstr($email,'@') != ''){
		echo 'It has email!';
		echo '<br>';
		if(strstr($email,'gmail') != ''){
		echo 'The email user is gmail!';
		echo '<br>';
		}
	}
}
?>
<form method="post">
	<input type="text" name="name">
	<input type="text" name="number">
	<input type="text" name="email">
	<input type="submit" name="action">
</form>