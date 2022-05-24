<?php

    /* EXAMPLE 01 
    
    $name = "Jony";

    $message = 'Hello '.(isset($name) ? $name : 'Visitor');

    echo $message;

    */

    /* EXAMPLE 02 

    $name = "Jony";

    $message = 'Hello '.($name == 'Jony' ? $name : 'Visitor');

    echo $message;

    */


    /* EXAMPLE 03 */

    $name = "Jony";

    $message = 'Hello '.(1 == 1 ? $name : 'Visitor');

    echo $message;

    $postRequest = (isset($_POST['something']) ? $_POST['something'] : 'There is not post request');

    echo $postRequest;


?>