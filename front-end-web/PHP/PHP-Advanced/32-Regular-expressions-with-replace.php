<?php

    $original = 'jonypeixoto@gmail.com.br';

    $modified = preg_replace('/(.*?)@(.*?)\.(.*?)$/', '$1@cybertimeup.$3',$original);

    echo $modified;

?>