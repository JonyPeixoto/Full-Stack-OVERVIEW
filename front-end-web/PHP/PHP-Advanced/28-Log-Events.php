<?php
    date_default_timezone_set('America/Sao_Paulo');
    $variable = 'Jony';
    if($variable == 'Jony'){
        echo 'Registered in log file';
        error_log(date('d-m-Y H:i:s'). ' That is not what I want!'."\n",3,'mysecretfile');
    }
?>