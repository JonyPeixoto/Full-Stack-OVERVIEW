<?php

	/* FUNCTION SUBSTR */

	$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac sem sit amet sapien blandit auctor aliquam eu neque. Quisque gravida elit eu lacus sollicitudin vulputate. Morbi risus ante, consequat et sollicitudin id, laoreet aliquet arcu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse convallis viverra purus, ac vehicula sem dictum eu. Donec arcu dui, consectetur ut fringilla id, maximus vel dolor. Nam a lobortis nibh. Sed semper tincidunt arcu, at semper dolor fermentum vitae. Proin accumsan justo enim, a rutrum arcu sodales a. Sed porttitor odio sit amet nunc suscipit fringilla. In volutpat consequat hendrerit. Duis placerat non diam vitae consequat. Nullam et odio nec arcu posuere bibendum quis non quam. Aenean tincidunt porta quam, at tincidunt tellus ultricies accumsan. Mauris libero lorem, viverra at condimentum a, interdum in odio.';

	//substr -> It serves to cut a string.
	//echo substr($content,0,20);



	/* FUNCTION EXPLODE = TRANSFORM STRING IN ARRAYS */


	$name = 'Jonathan Pereira Peixoto';

	$names = explode(' ',$name);

	//print_r($names);



	/* FUNCTION IMPLODE = TRANSFORM ARRAYS IN STRING */


	$names = implode(' ',$names);

	//echo $names;



	/* FUNCTION STRIP_TAGS = GET OUT ALL THE HTML AND PHP CODES. */



	$content = '<h1>Jonathan</h1>Other thing';

	//echo strip_tags($content);



	/* FUNCTION HTMLENTITIES = SHOW THE HTML CODE ON THE PAGE */


	echo htmlentities('<div></div>');


?>