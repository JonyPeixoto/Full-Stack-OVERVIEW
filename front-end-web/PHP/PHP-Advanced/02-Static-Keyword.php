<?php

    // EXAMPLE 01 - Without use Static

    /*

    function test(){
        $n = 0;
        $n++;
        return $n;
    }

    echo test();
    echo '<br />';
    echo test();

    */

    // EXAMPLE 02 - Using Static


    /*
    
    function test(){
        static $n = 0;
        $n++;
        return $n;
    }

    echo test();
    echo '<br />';
    echo test();

    */


    // EXAMPLE 03 - Using Static and Class 

    /*

    
    function test(){
        static $n = 0;
        $n++;
        return $n;
    }

    class Test 
    {

        public function print(){
            static $n = 0;
            $n++;
            return $n;
        }
    }

    $t = new Test();
    echo $t->print();
    echo '<br />';
    echo $t->print();


    */


    // EXAMPLE 04 - Using Static and static variable inside method static


    function test(){
        static $n = 0;
        $n++;
        return $n;
    }

    class Test 
    {

        public static function print(){
            static $n = 0;
            $n++;
            return $n;
        }
    }

    echo Test::print();
    echo '<br />';
    echo Test::print();



?>