<?php

/**
  magia_version: 0.0.11
 * */



$autos_id = $autos['id'];
$autos_placa = $autos['placa'];
$autos_id_contacto = $autos['id_contacto'];
$autos_estatus = $autos['estatus'];


$autos_estatus_0 = "";
$autos_estatus_1 = "";
if ($autos_estatus == 0) {
    $autos_estatus_0 = " checked ";
    $autos_estatus_1 = "";
} else {
    $autos_estatus_0 = "";
    $autos_estatus_1 = "checked";
}  
