<?php

    /* EXAMPLE 01 - FORM 1 

    $name = "Jony";
    function test(&$name){
        $name = 'Jeff';
    }

    test($name);
    echo $name;

    */


    /* EXAMPLE 02: FORM 2 */

    $name = "Jony";
    function test(&$name){
        global $name;
        $name = 'Jeff';
    }

    test($name);
    echo $name;


?>