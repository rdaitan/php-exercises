<?php
require_once "./fpdf/fpdf.php";

$pdf = new FPDF();
$pdf->addPage();

$pdf->setFont('Arial', 'B', 16);
$pdf->cell(40, 10, 'Hello Out There!');

$pdf->output();
