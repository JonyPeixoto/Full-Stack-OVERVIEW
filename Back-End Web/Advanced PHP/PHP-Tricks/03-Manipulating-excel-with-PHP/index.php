<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/* EXAMPLE 01: CREATE NEW FILES
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');
$sheet->setCellValue('A2','Other value');
$writer = new Xlsx($spreadsheet);
$writer->save('test.xlsx');
*/

/* EXAMPLE 02: TAKE NEW VALUES AND SHOW TO THE USER */

//IF YOU EDIT SOME VALUE ON EXCEL AUTOMATICALLY THE BROWSER WILL UPDATE.

$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('test.xlsx');

$worksheet = $spreadsheet->getActiveSheet();

$worksheet->getCell('A2')->setValue('Other value to A2');

echo $worksheet->getCell('A2');


?>