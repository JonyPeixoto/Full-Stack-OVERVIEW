<?php
//2 ARRAYS AND WE WILL VERIFY NUMBERS IN COMMON.

$array_0 = array(0,1,3,4,6,8,"Jonathan","Laura");
$array_1 = array(10,90,23,8,6,"Jonathan","Laura");

//Run 2 looping and check if there is one and the other.
$in_common = [];
for ($i = 0; $i < count($array_0); $i++){
	for($n = 0; $n < count($array_1); $n++){
	if($array_0[$i] === $array_1[$n]){
	//Number in common!
	$in_common[] = $array_0[$i];
	}
  }
}

foreach ($in_common as $key => $value) {
	echo $value;
	echo '<br>';
}

?>