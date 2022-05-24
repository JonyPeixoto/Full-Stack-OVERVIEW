<?php

    /* DECODING THE JSON 

    $json = '{"a":"Jony","b":{"0":"Jenny","1":"Jaff"},"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));
    $obj = json_decode($json);
    $arr = json_decode($json,true);

    //echo $obj->a;
    echo $arr['a'];
    echo $arr['b']['0'];

    */


    /* TRANSFORMING ARRAY TO JSON -> CONNECTING SERVERS */

    /*
    $arr = ['name'=>'jony','city'=>'rio de janeiro'];

    $json = json_encode($arr);
    echo $json;
    */

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(function(){
        $.ajax({
            url:'request.php',
            dataType:'json'
        }).done(function(data){
            console.log(data.name);
        })
    })
</script>
</body>
</html>