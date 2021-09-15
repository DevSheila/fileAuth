<?php
require('fpdf184/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
//set page font with first parameter as fontfamiliy and second as bold/itallic/underlined and the last as the font size

$pdf->SetFont('Arial','B',16);
//to print a text
//Cell takes six parameters width,height,"text",border 1 if you want 0 if you dont want,newline  1 if you want 0 if you dont want,"Text align"
$pdf->Cell(100,20,'Hello World',1,1,'C');
$pdf->Cell(100,20,'Hello World Again',1,0,'R');
//line break
$pdf->ln(10);
$pdf->Output();

?>