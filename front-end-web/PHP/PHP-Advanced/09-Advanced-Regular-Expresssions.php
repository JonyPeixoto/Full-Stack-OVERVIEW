<?php

    /* EXAMPLE 01

    $str = '<div class="test">
    <h2>Hello world!</h2>
    </div><div class="test2"><h2>Other phrase</h2></div>';

    //preg_match('/<div>(.*?)<\/div>/s',$str,$matches);
    //preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s',$str,$matches);

    preg_match_all('/<div class="(.*?)">(.*?)<\/div>/s',$str,$matches);

    //echo htmlentities($matches[0]);
    //echo htmlentities($matches[1]);

    //print_r($matches);

    //echo htmlentities($matches[0][0]);
    //echo htmlentities($matches[0][1]);
    //echo htmlentities($matches[1][0]);
    //echo htmlentities($matches[1][1]);

    //echo htmlentities($matches[1][1]);
    //echo htmlentities($matches[1][0]);
    //echo htmlentities($matches[2][0]);
    echo htmlentities($matches[2][1]);


    */


    /* EXAMPLE 02 */

    /*

    $str = 'Jony';

    //if(preg_match_all('/Jony/s',$str)){
    //if(preg_match_all('/jony/s',$str)){
    if(preg_match_all('/jony/i',$str)){
        echo 'ok';
    }

    */

    
    /* EXAMPLE 03 */

    $str = 'Jony
ok';

    //if(preg_match_all('/Jony/s',$str)){
    //if(preg_match_all('/jony/s',$str)){
    //if(preg_match_all('/jony\\r\\nok/i',$str)){
    if(preg_match_all('/jony\\r\\nok/is',$str)){
        echo 'ok';
    }

?>