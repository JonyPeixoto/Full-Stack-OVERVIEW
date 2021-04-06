<?php


	//CREATING ARRAYS SINGLE:

	//WAY 1:

	$arr = ['Jony','Thay'];


	//WAY 2:

	$arr = array('Jony','Thay','key2'=>'Gio');

	//WAY 3:

	$arr[0] = 'Jony';
	$arr[] = 'Jenny';


	//CREATING MULTIDIMENSIONAL ARRAYS:

	/* EXAMPLE 1:

	$arr2 = array(array('Jony','Thay'),array('24','18'));

	echo $arr2[1][0];

	*/


	/* EXAMPLE 2:

	$arr2[0] = array('key1'=>'Jony','Jenny');

	echo $arr2[0]['key1'];

	*/


	/* EXAMPLE 3*/

	$arr2[0]['key1'] = 'Jony';

	echo $arr2[0]['key1'];
?>