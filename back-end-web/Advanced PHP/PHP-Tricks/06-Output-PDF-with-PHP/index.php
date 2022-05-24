<?php
    // Require composer autoload
    include('vendor/autoload.php');

    // Create an instance of the class:
    $mpdf = new \Mpdf\Mpdf();

    $value = '';
    for($i = 0; $i < 10; $i++){
        $value.="<h3>Value ".$i.'</h3>'; 
        $value.="<hr>";
    }
    // Write some HTML code:
    $mpdf->WriteHTML($value);

    // Output a PDF file directly to the browser
    $mpdf->Output();
?>