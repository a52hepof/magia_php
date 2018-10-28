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

                         $pdf->Cell($w * 1, $h, _tr("id_contacto"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("direccion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("numero"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("cpostal"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("barrio"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("comuna"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("ciudad"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("pais"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("precio_hora"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("orden"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./parkings/modelos/pdf.php";
                while ($parkings = mysql_fetch_array($sql)) {
                    include "./parkings/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, utf8_decode($parkings_id_contacto), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_direccion), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_numero), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_cpostal), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_barrio), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_comuna), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_ciudad), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_pais), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_precio_hora), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_orden), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, utf8_decode($parkings_estatus), $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
