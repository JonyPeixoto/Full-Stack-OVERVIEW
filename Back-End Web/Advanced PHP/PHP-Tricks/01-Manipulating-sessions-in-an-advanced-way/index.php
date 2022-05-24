<?php
    session_start(); 
    $_SESSION['name'] = 'Jony';
    session_write_close();
    sleep(5);
?>