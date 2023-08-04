<?php
include('fpdf/fpdf.php');
// New object created and constructor invoked
$pdf = new FPDF();
// Add new pages. By default no pages available.
$pdf->AddPage();  
// Close document and sent to the browser
$pdf->Output();
?>
