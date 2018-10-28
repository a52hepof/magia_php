<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("codigo"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./reserva_estatus/modelos/pdf.php";
                while ($reserva_estatus = mysql_fetch_array($sql)) {
                    include "./reserva_estatus/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, utf8_decode($reserva_estatus_codigo), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reserva_estatus_estatus), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reserva_estatus_orden), $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
