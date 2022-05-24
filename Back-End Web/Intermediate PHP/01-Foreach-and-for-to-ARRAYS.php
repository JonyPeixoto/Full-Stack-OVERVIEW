<?php

/*WAY 1: Go through the ARRAY*/

	$arr = array('key1'=>'Jonathan','Jenny','Gio','Thay');

	foreach($arr as $key => $value) {
		echo $key;
		echo '=>';
		echo $value;
		echo '<hr>';
	}


/* WAY 2: Go through the ARRAY */

/*

$arr = array('Jonathan','Jenny','Gio','Thay');


	$total = count($arr);

	for($i = 0; $i < $total; $i++){
		echo $arr[$i];
		echo '<br />';
	}

*/


?>