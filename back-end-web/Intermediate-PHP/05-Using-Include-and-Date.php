<?php
    /* EXAMPLE FUNCTION
        * Working with dates
    */

    /*

    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/Y H:i:s',time()+(60*10)); 

    echo $data;

    */


    /*  EXAMPLE FUNCTION
        * HEADER / FOOTER
    */

    $title_site = 'Title of my site';
    include('05-header.php');

?>

<h1>My home's content!</h1>

<?php
    include('05-footer.php');
?>