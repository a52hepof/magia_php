<?php

$nombrePlugin = (isset($_GET['nombrePlugin']))? $_GET['nombrePlugin'] : false ;

if(!  $nombrePlugin ){
    mensaje('error', 'Falta el nombre de la tabla');
    die();
}



include "./modelos/maqueta_plugin.php";
include "./vista/maqueta_plugin_ver.php";