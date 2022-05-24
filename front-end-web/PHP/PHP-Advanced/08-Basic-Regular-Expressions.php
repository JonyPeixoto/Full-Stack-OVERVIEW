<?php

    // EXAMPLE 01 - USING NAME

    /*

    $test = "Jony";
    
    //if(preg_match('/ny/', $test)){
    //    echo 'True!';
    //}

    preg_match('/(.*?)o(.*)/',$test,$return);
    //echo $return[0];
    echo $return[2];

    */


    // EXAMPLE 02 - VALIDATION CPF

    function cpfValid($cpf){
        // FORMAT CPF: 000.000.000-00
        $expression = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';

        // USING A-Z CHARACTERS
        //$expression = '/[0-9a-z]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';

        // USING SPECIAL CHARACTERS AND A-Z CHARACTERS
        //$expression = '/[0-9a-z_-\.]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';

        return preg_match($expression, $cpf);
    }
    if(isset($_POST['action'])){
        $cpf = $_POST['cpf'];

        if(cpfValid($cpf)){
            echo 'The cpf is valid!';
        }else{
            echo 'The cpf is not valid!';
        }
    }
?>

<form method="post">
    <input type="text" name="cpf">
    <input type="submit" name="action" />
</form>