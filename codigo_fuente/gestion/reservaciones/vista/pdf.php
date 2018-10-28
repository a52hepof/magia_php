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

                         $pdf->Cell($w * 1, $h, _tr("id_parking"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("placa"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha_i"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("hora_i"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("id_estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./reservaciones/modelos/pdf.php";
                while ($reservaciones = mysql_fetch_array($sql)) {
                    include "./reservaciones/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, utf8_decode($reservaciones_id_parking), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reservaciones_placa), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reservaciones_fecha_i), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reservaciones_hora_i), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($reservaciones_id_estatus), $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
