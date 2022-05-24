<?php
    $xml = simplexml_load_file('file.xml');

    // ARRAY THAT ACCESS ALL THE VALUE ON THE BROWSER
    //print_r($xml);

    // READ THE XML FILE -> RETURNING THE OBJECT PROPERTIES

    //echo $xml->information->item->title;

    //echo $xml->information2->item->name;


    // CREATE THE XML FILE FROM AN ARRAY

    writeXML(array('Jony'=>'name','25'=>'age','running, fit'=>'sports'),'file.xml');
      
    // READING THE XML
    $content = simplexml_load_file('file.xml');

    echo $content->sports;

    function writeXML($arr,$nameofthefile){
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($arr, array ($xml, 'addChild'));
        file_put_contents($nameofthefile,$xml->asXML());
    };

?>