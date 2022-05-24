<?php

    class Test
    {
        public function example($par){
            if($par != 10){
                Throw new Exception("An error has occurred!");
            }else{
                echo 'Success!';
            }
        }
    }

    $test = new Test();

    try{
        // THROW NEW EXCEPTION TURN ON -> WHEN THE NUMBER IS DIFFERENT OF 10, CAN BE "20" IN THIS CASE
        
        //$test->example(20);
        $test->example(10);
    }catch(Exception $e){
        echo $e->getMessage();
    }

?>