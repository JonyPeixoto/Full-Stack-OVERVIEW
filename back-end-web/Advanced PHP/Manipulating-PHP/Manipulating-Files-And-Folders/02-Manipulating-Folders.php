<?php
    // CREATE FOLDER AUTOMATICALLY USING RELATIVE DIRECTORY

    //mkdir('folder');

    //---------------------------------------------//


    // VERIFY IF DETERMINATE FOLDER, IS IT EXIST?

    /*

    //if(is_dir('folder')){
    // IF YOU CHANGE THE FOLDER NAME...
    if(is_dir('request.php')){
        echo 'It is a valid folder';
    }else{
        echo 'It is not exist or it is not a folder';
    }

    */

    //---------------------------------------------/


    // REMOVE THE FOLDER 

    //rmdir('folder');

    //---------------------------------------------/


    // LIST THE FILES IN THE FOLDER

    if ($handle = opendir('folder')) {
    
        /* Esta é a forma correta de varrer o diretório */
        while ($file = readdir($handle)) {
            if($file == '.' || $file == '..'){
                continue;
            }
            /*
            if(is_dir('folder/'.$file) == false){
                //It is a file
            }else{
                //It is a folder
            }
            */
            echo "$file\n";
            echo '<br />';
        }
        
    
        closedir($handle);
    }

?>