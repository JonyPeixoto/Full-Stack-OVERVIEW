<?php

    // EXAMPLE 01 - VARIABLE AS FUNCTION (FUNCTION INSIDE VARIABLE) - FINITE TIMES

    /*

    $func = function($name){
        echo $name;
    };

    $func('Jony');

    */


    // EXAMPLE 02 - VARIABLE AS FUNCTION (FUNCTION INSIDE VARIABLE) - INFINITE TIMES

    /*

    $func = function($name){
        echo $name;
    };

    function one(){



            // WAY 1

            function two(){
                echo 'Hello world';
            }
            two();


            // WAY 2 

            $func = function (){
                echo 'Hello world';
            };
            $func();

            


    }

    one();

    */


    // EXAMPLE 03 - VARIABLE AS FUNCTION (FUNCTION INSIDE VARIABLE) - INFINITE TIMESTAM - ANOTHER WAY USING PHP'S NATIVE FUNCTION

    /*

    $func = function($name){
        echo $name;
    };

    */


    $func = '';


    function one(){

        $func = function (){
            echo 'Hello world';
        };

        $func();

    }


    /*
    
    $function = 'one';
    call_user_func('one');
    
    OR ...

    */


    $function = 'one';
    //call_user_func($function);

    if(is_callable($func)){
        echo 'Hello world';
    }
   

?>