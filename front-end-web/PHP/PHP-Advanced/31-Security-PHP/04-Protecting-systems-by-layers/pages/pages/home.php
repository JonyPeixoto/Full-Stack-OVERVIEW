<?php
    if(isset($logged)){
    echo 'Here is an exclusive information only for those who logged into the system!';
    }else{
        echo 'File protected';
    }
?>