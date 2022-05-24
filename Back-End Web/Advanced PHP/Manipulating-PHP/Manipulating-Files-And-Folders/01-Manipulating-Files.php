<?php
    // EXERCISE 01 - Let's to create a new file (ADD CONTENT IN THE FILES)
    /*
    $content = "My new content created through PHP\r\nOther line\r\nOther line again";
    file_put_contents('file.txt',$content);
    */

    // EXERCISE 02 - Read - ON THE BROWSER - what's inside the file

    //$content = "My new content created through PHP\r\nOther line\r\nOther line again";
    //file_put_contents('file.txt',$content);
    /*
    $content = file_get_contents('file.txt');

    echo nl2br($content);
    */

    // EXERCISE 03 - Make requests from external servers

    //$content = "My new content created through PHP\r\nOther line\r\nOther line again";
    //file_put_contents('file.txt',$content);
    /*
    $content = file_get_contents('https://google.com.br');

    echo $content;
    */

    //EXERCISE 04 - INSERT FILES USING LOOPING / DELETING FILES 

    //INSERT FILES USING LOOPING 
    
    /*
    for($i = 0; $i < 100; $i++){
        $content = 'My file content'.$i;
        file_put_contents('file'.$i.'.txt', $content);
    }
    */

    //DELETING FILES  

    for($i = 0; $i < 100; $i++){
        unlink('file'.$i.'.txt');
    }

?>