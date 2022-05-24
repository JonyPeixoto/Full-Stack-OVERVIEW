<?php

/* EXAMPLE 01

    $date = DateTime::createFromFormat('d/m/Y', '08/08/1996');
    echo $date->format('Y-m-d');
    
*/

/* EXAMPLE 02 */

    date_default_timezone_set('America/Sao_Paulo');
    //echo date('d/m/Y H:i:s',time());
    //echo date('d/m/Y H:i:s',strtotime('1996-08-08 18:05:40'));
    echo date('d/m/Y H:i:s',time() + 60*60*24);


?>