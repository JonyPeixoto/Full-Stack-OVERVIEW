
    <!-- 
    
    Redirect Page

    // DOCUMENTATION: https://www.php.net/manual/pt_BR/function.header.php

    <?php


    //header('Location: https://google.com');
    //die();

    ?>

    -->



    <!-- Redirect Image -->

    <!-- DOCUMENTATION IMAGE: https://stackoverflow.com/questions/2633908/php-display-image-with-header/2634072 -->
    <!-- READFILE: https://www.php.net/manual/pt_BR/function.readfile.php -->

    <?php
        header('Content-type: landscape/jpg');
        readfile('images/landscape.jpg');
        die();
        //header('Content-type: image/jpeg');
        //header('Content-type: image/jpg');
        //header('Content-type: image/gif');
        //header('Content-type: image/ico');
    ?>

    
