<?php

    $name = "Jony";
    $name2 = "Jeff";

    $test = function() use ($name,$name2){
        //echo $name;
        echo $name2;
    };

    $test();

?>