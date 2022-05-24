<?php

    $start = microtime(true);

    sleep(3);

    $end = microtime(true);

    echo 'The time it took for my script to run was: '.round(($end-$start),4);

?>