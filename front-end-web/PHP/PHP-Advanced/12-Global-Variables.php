<?php

    /* EXAMPLE 01
    
    $name = "Jony";
    function test(){
        global $name;
        echo $name;
    }

    test();

    */



    /* EXAMPLE 02 - USING OBJECT ORIENTATION */

    $name = "Jony";
    
    class test
    {

        function __construct()
        {
            global $name;
            echo $name;
        }
    }

    new test;

?>