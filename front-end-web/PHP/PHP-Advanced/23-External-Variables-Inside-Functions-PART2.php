<?php

    class Class1
    {

        public function index(){
            echo 'Calling class 1';
        }
    }

    class class2
    {

        public function index(){
            echo 'calling the class 2';
        }

        public function callBack($func){
            $func();
        }
    }

    $class1 = new Class1;
    $class2 = new Class2;

    $class2->callBack(function() use ($class1){
        $class1->index();
    });

?>