<?php

    /* EXAMPLE 01: ARRAY BEFORE PHP 7.0 


    define('BASE','http://localhost');

    echo BASE;

    */


    /* EXAMPLE 02: ARRAY IN CONSTANTS AFTER PHP 7 */

    define('DATAS',array('host'=>'locahost','dbname'=>'devweb','user'=>'root','password'=>'909090'));

    // ACCESS ONLY THE FIRST INFORMATION 

    //echo DATAS['host'];


    // ACCESS ALL THE INFORMATION

    print_r(DATAS);

?>