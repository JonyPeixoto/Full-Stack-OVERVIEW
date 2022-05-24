<?php
    session_start();
    if(isset($_SESSION['login'])){
    //Unique file for ajax request only!
    $data['info'] = 'Exclusive information for logged in users only';
    die(json_encode($data));
    }else{
        die("Protected file! Log into the system!");
    }
?>