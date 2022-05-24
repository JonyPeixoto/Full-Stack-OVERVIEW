<?php
    include('Template.php');

    $template = new Template();
    $template->render(['title'=>'My title','name'=>'Jony','age'=>25],'about.phtml');
?>