<?php

    // EXAMPLE 01 - INSTANCEOF 

    /*

    class A
    {

    }


    class B
    {

    }

    $a = new A;
    $b = new B;

    // POSITIVE SENTENCE

    /*

    if($a instanceof A){
        echo 'the variable "a" does references class A';
    }

    */

    // NEGATIVE SENTENCE

    /*

    if(!($a instanceof A)){
        echo 'the variable "a" does references class A';
    }

    */



    // EXAMPLE 02 - CALLBACK

    function execute($b,$a = "Jony"){
        // if(is_callable($b))
        // OR

        if($b instanceof Closure)
            $b($a);
    }

    execute(function($name){
        echo 'Hello '.$name;
    });


?>