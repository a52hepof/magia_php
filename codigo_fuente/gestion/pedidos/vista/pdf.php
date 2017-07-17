<?php

$pdf = new FPDF();

$w = 16; // 0 hasta el margen derecho
$h = 7; // alto por defecto
$txt = 'a';
$border = 'LTRB';
$ln = 1; // siguiente
$align = "L";
$fill = "";
$fillTitulo = true;
$link = false;

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);
$pedidos_fecha = 11;


$pdf->Cell($w * 8, $h, "$config_nombre_web", $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr('Pedido'), $border, 1, $align, $fill, $link);
$pdf->Ln();
$pdf->Cell($w * 3, $h, '', 0, 0, $align, $fill, $link);
$pdf->MultiCell($w * 5, $h, "$config_nombre_web \n $config_direccion", 0, $align, $fill);
$pdf->Ln();
$pdf->Image("$path_imagenes/logo.png", 10, 25, 30);




$pdf->Cell($w * 8, $h, _tr("Fecha"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Estatus"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, _tr("Empresa"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Payant"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, _tr("Contacto"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Remake"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("De n°"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Perdida auditiva"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Construcción orejera"), $border, 1, $align, $fill, $link);
$pdf->Ln();
// **************************************titulos
$pdf->SetFillColor(230, 230, 0);
$pdf->Cell($w * 4, $h, _tr("Tipos"), $border, 0, $align, $fillTitulo, $link);
$pdf->Cell($w * 4, $h, _tr("Modelos"), $border, 0, $align, $fillTitulo, $link);
$pdf->Cell($w * 4, $h, _tr("Materiales"), $border, 1, $align, $fillTitulo, $link);
// Campos
$pdf->Cell($w * 4, $h, _tr("Bte"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Invisible"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Résine"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Rite"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Coquille"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Silicone"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Slim Tube"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Conduit seul"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Thermotec"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Custom Dume"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Epaulement"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Thermosoft"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Natation"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Prince de Crave"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Anti-Bactérie"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Dormir"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Iros"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Mix"), $border, 1, $align, $fill, $link);

// Campos
$pdf->Cell($w * 4, $h, _tr("Anti ruido"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Campo"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Campo"), $border, 1, $align, $fill, $link);
$pdf->Ln();
// **************************************titulos
$pdf->Cell($w * 4, $h, _tr("Ventilación"), $border, 0, $align, $fillTitulo, $link);
$pdf->Cell($w * 4, $h, _tr("RITE / SLIM TUBE"), $border, 0, $align, $fillTitulo, $link);
$pdf->Cell($w * 4, $h, _tr("Opciones"), $border, 1, $align, $fillTitulo, $link);
// Campos 1
$pdf->Cell($w * 4, $h, _tr("Izquierda"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Marques"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Hoka"), $border, 1, $align, $fill, $link);
// Campos 2
$pdf->Cell($w * 4, $h, _tr("Derecha"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Models"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Cordon"), $border, 1, $align, $fill, $link);
// Campos 2
$pdf->Cell($w * 4, $h, _tr("Campo"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Campo"), $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Pailletes"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Fil nylon"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Codo suave"), $border, 1, $align, $fill, $link);

$pdf->Cell($w * 8, $h, '', $border, 0, $align, $fill, $link);
$pdf->Cell($w * 4, $h, _tr("Implante"), $border, 1, $align, $fill, $link);

$pdf->Ln();
// Campos 2
$pdf->Cell($w * 3, $h, _tr("Notas"), $border, 1, $align, $fillTitulo, $link);
$pdf->MultiCell($w * 12, $h, dirname(__FILE__) . __FILE__, $border, $align, $fill);




$pdf->Output();
