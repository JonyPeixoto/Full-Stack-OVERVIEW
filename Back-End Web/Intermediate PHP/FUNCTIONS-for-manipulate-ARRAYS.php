<?php

	/*-----ARRAY_MERGE = MERGE 1 OR MORE ARRAYS------*/

	/*

	$array1 = array("key1" =>"value1","key2"=>"value2");
	$array2 = array("key3"=>"value3","key4"=>"value4");
	$array3 = array("key5"=>"value5");
	$result = array_merge($array1, $array2,$array3);
	print_r($result);

	*/


	/*----ARRAY_INTERSECT_KEY = RETURN VALUE WITH THE SAME KEY IN 1 OR MORE ARRAYS----*/

	/*

	$array1 = array("key1" =>"value1","key2"=>"value2");
	$array2 = array("key2"=>"other value","key1"=>"other value","key3"=>"value3","key4"=>"value4");

	print_r(array_intersect_key($array1,$array2));

	*/


	/*----ARRAY_MAP = APPLY A FUNCTION TO ALL VALUE OF THE ARRAY----*/


	$arr = ['<p>Jonathan</p>','Jenny','<h1>Gio</h1>'];

	print_r(array_map('strip_tags',$arr));

?> 