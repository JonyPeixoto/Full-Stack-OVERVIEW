<?php

	//Sleep the code per x seconds. (FUNCTION SLEEP)

/*
	
	sleep(3);

	echo 'one';

	sleep(3);

	echo 'two';

	sleep(3);

	echo 'tres';

*/


	// Some part of the code can stop to execute. (FUNCTION DIE)

	$name = 'Jony';

	if($name == 'Jenny'){
		//continue the code
		echo 'All right!';
	}else{
		die("The script stopped running");
	}


	sleep(3);

	echo 'one';

	sleep(3);

	echo 'two';

	sleep(3);

	echo 'tres';

?>