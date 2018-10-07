<?php




$nombrePlugin = (isset($_GET['nombrePlugin']))? $_GET['nombrePlugin'] : false ;
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : false ;
$padre = (isset($_GET['padre']))? $_GET['padre'] : false ;
$label = (isset($_GET['label']))? $_GET['label'] : false ;




include "modelos/plugins_crear_previsualizar.php"; 
include "vista/plugins_crear_previsualizar.php"; 