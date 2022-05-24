<?php

    // USING TRY TO PROTECT MORE YOUR APPLICATION

    try{
    $pdo = new PDO('mysql:host=localhost;dbname=security_test_php','root','');
    // Development Mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // Production Mode.
    // Don't put anything
    }catch(Exception $e){
        //echo $e->getMessage();
        echo 'It is not possible connect! Try again later!';
    }

    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        // TESTING SQL INJECTION WITHOUT PROTECT THE WEB APPLICATION 

        /*

        $sql = $pdo->prepare("SELECT * FROM `users` WHERE login = '$login' AND password = '$password'");

        $sql = $pdo->prepare("SELECT * FROM `users` WHERE login = ? AND password = ?");
        $sql->execute();
        if($sql->rowCount() == 1){
            echo 'Logged!';
        }else{
            echo 'Login failed!';
        }

        */

        // LOGIN:  'OR 1=1;/"    PASSWORD:    '/"--



        // TESTING SQL INJECTION USING PROTECTION THE WEB APPLICATION

        $sql = $pdo->prepare("SELECT * FROM `users` WHERE login = ? AND password = ?");
        $sql->execute(array($login,$password));
        if($sql->rowCount() == 1){
            echo 'Logged!';
        }else{
            echo 'Login failed!';
        }
    }
?>

<form method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" name="action" value="send!">
</form>