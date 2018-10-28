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

                         $pdf->Cell($w * 1, $h, _tr("placa"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("id_contacto"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./autos/modelos/pdf.php";
                while ($autos = mysql_fetch_array($sql)) {
                    include "./autos/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, utf8_decode($autos_placa), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($autos_id_contacto), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($autos_estatus), $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
