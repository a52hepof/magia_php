<?php

/**
  magia_version: 0.0.11
 * */
$parkings_id = $parkings['id'];
$parkings_id_contacto = $parkings['id_contacto'];
$parkings_direccion = $parkings['direccion'];
$parkings_numero = $parkings['numero'];
$parkings_cpostal = $parkings['cpostal'];
$parkings_barrio = $parkings['barrio'];
$parkings_comuna = $parkings['comuna'];
$parkings_ciudad = $parkings['ciudad'];
$parkings_pais = $parkings['pais'];
$parkings_precio_hora = $parkings['precio_hora'];
$parkings_orden = $parkings['orden'];
$parkings_estatus = $parkings['estatus'];
$parkings_estatus_0 = "";
$parkings_estatus_1 = "";
if ($parkings_estatus == 0) {
    $parkings_estatus_0 = " checked ";
    $parkings_estatus_1 = "";
} else {
    $parkings_estatus_0 = "";
    $parkings_estatus_1 = "checked";
}  
