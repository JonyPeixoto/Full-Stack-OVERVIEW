<?php

    tests();
    function tests(){
        static $i = 0;
        echo 'Hello, calling the function!';
        $i++;
        if($i < 3){
            tests();
        }
    }

?>