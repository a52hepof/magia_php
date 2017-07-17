<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont("Times", "", 12);


$pdf->Cell($w * 12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln(10);
//********************
$pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

$pdf->Cell($w * 1, $h, _tr("nombre"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, _tr("apellidos"), $border, $ln, $align, $fill, $link);
$pdf->Ln();
//********************
$i = 1;
include "./test/modelos/pdf.php";
while ($test = mysql_fetch_array($sql)) {
    include "./test/reg/reg.php";
    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $test_nombre, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $test_apellidos, $border, $ln, $align, $fill, $link);


    $pdf->Ln();
    $i++;
}
//********************
$pdf->Output();


