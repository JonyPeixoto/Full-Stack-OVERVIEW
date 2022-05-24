<?php

    class Test
    {
        public function sendMessage($n){
            if($n instanceof Closure){
                $n = $n->bindTo($this);
                $n();
            }
        }

        public function something(){
            echo 'I am calling something!';
        }
    }

    $test = new Test;
    $test->sendMessage(function(){
        $this->something();
    });


?>