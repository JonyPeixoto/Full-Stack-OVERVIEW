<?php

$array = array('Jonathan','Jenny','Giovanna','Jonathan','Lucas','Maria','Jonathan','Jenny','Giovanna','Giovanna','Jonathan');

$RepeatedArray = array();

for($i = 0; $i < count($array);$i++){	
	$CurrentValue = $array[$i];
	if(!isset($RepeatedArray[$CurrentValue])){
		$RepeatedArray[$CurrentValue] = 0;
	}else{
		$RepeatedArray[$CurrentValue]++;
	}
}

foreach ($RepeatedArray as $key => $value) {
	echo $key;
	echo $value;
	echo '<hr>';
}




?>