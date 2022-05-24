<?php
    include('11-Cache.php');
    $cache = new Cache;
    echo $cache->readCache()->content;
?>