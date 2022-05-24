<?php

    /* EXAMPLE 01 - WITHOU USE PHP 7.1

    function test(){
        return 9;
    }
    $number = test();

    var_dump($number);

    */


    /* EXAMPLE 02 - USING PHP 7.1 */

    function test() :?string{
        return 9;
    }

    function test2(?string $number){
        return $number;
    }
    
    $number = test2(10);

    var_dump($number);

?>