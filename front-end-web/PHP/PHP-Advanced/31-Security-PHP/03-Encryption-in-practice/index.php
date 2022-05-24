<?php

    // ENCRYPTION MD5
    // DOCUMENTATION: https://www.php.net/manual/pt_BR/function.md5.php

    /*

    $login = 'jony';
    $password = md5('jony');

    echo $password;

    if(isset($_POST['login'])){
        if($_POST['login'] == $login && md5($_POST['password']) == $password){
            echo 'Successfully logged in!';
        }else{
            echo 'Verification failed!';
        }
    }

    */


     // ENCRYPTION SHA1
    // DOCUMENTATION: https://www.php.net/manual/pt_BR/function.sha1.php

    $login = 'jony';
    $password = sha1('jony');

    echo $password;

    if(isset($_POST['login'])){
        if($_POST['login'] == $login && sha1($_POST['password']) == $password){
            echo 'Successfully logged in!';
        }else{
            echo 'Verification failed!';
        }
    }
    
?>

<form method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" name="action" value="send!">
</form>