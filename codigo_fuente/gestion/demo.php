<?php
session_start("magia_php");
include "z_verificar.php";
include "../admin/bd.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "../admin/funciones.php";
include "../admin/funciones_sql.php";
include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
include "../admin/formularios.php";
include "../admin/menu.php";
include "../admin/mensajes.php";
include "../admin/paginacion.php";
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";




$id = ($_REQUEST['id'])?mysql_real_escape_string($_REQUEST['id']):null;
$ref = ($_REQUEST['ref'])?mysql_real_escape_string($_REQUEST['ref']):null;
///***********************************************************************
$email = ($_REQUEST['email'])?mysql_real_escape_string($_REQUEST['email']):null;
$empresa = ($_REQUEST['empresa'])?mysql_real_escape_string($_REQUEST['empresa']):null;
$cliente = ($_REQUEST['cliente'])?mysql_real_escape_string($_REQUEST['cliente']):null;
//*************************************************************************
$payant = ($_REQUEST['payant'])?mysql_real_escape_string($_REQUEST['payant']):null;
$remake = ($_REQUEST['remake'])?mysql_real_escape_string($_REQUEST['remake']):null;
$du_numero = ($_REQUEST['du_numero'])?mysql_real_escape_string($_REQUEST['du_numero']):null;
$perdida_auditiva = ($_REQUEST['perdida_auditiva'])?mysql_real_escape_string($_REQUEST['perdida_auditiva']):null;
$orejera = ($_REQUEST['orejera'])?mysql_real_escape_string($_REQUEST['orejera']):null;
$bte = ($_REQUEST['bte'])?mysql_real_escape_string($_REQUEST['bte']):null;
$rite = ($_REQUEST['rite'])?mysql_real_escape_string($_REQUEST['rite']):null;
$slim_tube = ($_REQUEST['slim_tube'])?mysql_real_escape_string($_REQUEST['slim_tube']):null;
$custom_dume = ($_REQUEST['custom_dume'])?mysql_real_escape_string($_REQUEST['custom_dume']):null;
$natation = ($_REQUEST['natation'])?mysql_real_escape_string($_REQUEST['natation']):null;
$dormir = ($_REQUEST['dormir'])?mysql_real_escape_string($_REQUEST['dormir']):null;
$anti_bruit = ($_REQUEST['anti_bruit'])?mysql_real_escape_string($_REQUEST['anti_bruit']):null;
$invisible = ($_REQUEST['invisible'])?mysql_real_escape_string($_REQUEST['invisible']):null;
$coquille = ($_REQUEST['coquille'])?mysql_real_escape_string($_REQUEST['coquille']):null;
$conduit_seul = ($_REQUEST['conduit_seul'])?mysql_real_escape_string($_REQUEST['conduit_seul']):null;
$epaulemnent = ($_REQUEST['epaulemnent'])?mysql_real_escape_string($_REQUEST['epaulemnent']):null;
$prince_de_crave = ($_REQUEST['prince_de_crave'])?mysql_real_escape_string($_REQUEST['prince_de_crave']):null;
$iros = ($_REQUEST['iros'])?mysql_real_escape_string($_REQUEST['iros']):null;
$resine = ($_REQUEST['resine'])?mysql_real_escape_string($_REQUEST['resine']):null;
$silicone = ($_REQUEST['silicone'])?mysql_real_escape_string($_REQUEST['silicone']):null;
$thermotec = ($_REQUEST['thermotec'])?mysql_real_escape_string($_REQUEST['thermotec']):null;
$thermosoft = ($_REQUEST['thermosoft'])?mysql_real_escape_string($_REQUEST['thermosoft']):null;
$anti_bacterie = ($_REQUEST['anti_bacterie'])?mysql_real_escape_string($_REQUEST['anti_bacterie']):null;
$mix = ($_REQUEST['mix'])?mysql_real_escape_string($_REQUEST['mix']):null;
$ventilation_gauche = ($_REQUEST['ventilation_gauche'])?mysql_real_escape_string($_REQUEST['ventilation_gauche']):null;
$ventilation_droite = ($_REQUEST['ventilation_droite'])?mysql_real_escape_string($_REQUEST['ventilation_droite']):null;
$couleur_gauche = ($_REQUEST['couleur_gauche'])?mysql_real_escape_string($_REQUEST['couleur_gauche']):null;
$marques = ($_REQUEST['marques'])?mysql_real_escape_string($_REQUEST['marques']):null;
$models = ($_REQUEST['models'])?mysql_real_escape_string($_REQUEST['models']):null;
$couleur_droite = ($_REQUEST['couleur_droite'])?mysql_real_escape_string($_REQUEST['couleur_droite']):null;
$hoka = ($_REQUEST['hoka'])?mysql_real_escape_string($_REQUEST['hoka']):null;
$cordon = ($_REQUEST['cordon'])?mysql_real_escape_string($_REQUEST['cordon']):null;
$pailletes = ($_REQUEST['pailletes'])?mysql_real_escape_string($_REQUEST['pailletes']):null;
$fil_nylon = ($_REQUEST['fil_nylon'])?mysql_real_escape_string($_REQUEST['fil_nylon']):null;
$coude_soupe = ($_REQUEST['coude_soupe'])?mysql_real_escape_string($_REQUEST['coude_soupe']):null;
$implant = ($_REQUEST['implant'])?mysql_real_escape_string($_REQUEST['implant']):null;
$notes = ($_REQUEST['notes'])?mysql_real_escape_string($_REQUEST['notes']):null; 
$fecha = ($_REQUEST['fecha'])?mysql_real_escape_string($_REQUEST['fecha']):null; 
$notas = ($_REQUEST['notas'])?mysql_real_escape_string($_REQUEST['notas']):null; 
$estatus = ($_REQUEST['estatus'])?mysql_real_escape_string($_REQUEST['estatus']):null; 

$des = array();

foreach ($_REQUEST as $key => $value) {
    $des[$key] = htmlentities($value); 
}

$json = json_encode($des);

echo "<pre><code>";
echo var_dump($json);
echo "</code></pre>";
$array = json_decode($json);

echo "El array es";
echo "<pre><code>";
echo var_dump($array);
echo "</code></pre>";





$products = json_decode($json, true);

foreach ($products as $product) {
    //print_r($product) . "<br>";
    echo "$product<br>";
    echo '<input type="text" value="'.$product.'">'; 
    
}
?>
















//$descripcion = ($_REQUEST['descripcion'])?mysql_real_escape_string($_REQUEST['descripcion']):null;
/*

echo "<hr>"; 
echo "<hr>"; 
echo "<hr>"; 



$a = array(
"payant",
"remake",
"du_numero",
"perdida_auditiva",
"orejera",
"bte",
"rite",
"slim_tube",
"custom_dume",
"natation",
"dormir",
"anti_bruit",
"invisible",
"coquille",
"conduit_seul",
"epaulemnent",
"prince_de_crave",
"iros",
"resine",
"silicone",
"thermotec",
"thermosoft",
"anti_bacterie",
"mix",
"ventilation_gauche",
"ventilation_droite",
"couleur_gauche",
"marques",
"models",
"couleur_droite",
"hoka",
"cordon",
"pailletes",
"fil_nylon",
"coude_soupe",
"implant"
);

$descripcion = array();
$i = 1;
foreach ($_REQUEST as $key => $value) {
    $descripcion[$key] = $value;  
    $i++;
}

echo "<pre>";  
echo var_dump($descripcion);
echo "</pre>";


?>
<!--
array(43) {
  ["p"]=>
  string(7) "pedidos"
  ["c"]=>
  string(5) "crear"
  ["a"]=>
  string(5) "crear"
  ["ref"]=>
  string(13) "5957e818387dd"
  ["fecha"]=>
  string(10) "2017-07-01"
  ["email"]=>
  string(13) "demo@demo.com"
  ["payant"]=>
  string(1) "1"
  ["remake"]=>
  string(1) "1"
  ["du_numero"]=>
  string(1) "s"
  ["perdida_auditiva"]=>
  string(7) "moyenne"
  ["orejera"]=>
  string(5) "molle"
  ["bte"]=>
  string(1) "1"
  ["rite"]=>
  string(1) "1"
  ["slim_tube"]=>
  string(1) "1"
  ["custom_dume"]=>
  string(1) "1"
  ["natation"]=>
  string(1) "1"
  ["dormir"]=>
  string(1) "1"
  ["anti_bruit"]=>
  string(1) "1"
  ["invisible"]=>
  string(1) "1"
  ["coquille"]=>
  string(1) "1"
  ["conduit_seul"]=>
  string(1) "1"
  ["epaulemnent"]=>
  string(1) "1"
  ["prince_de_crave"]=>
  string(1) "1"
  ["iros"]=>
  string(1) "1"
  ["resine"]=>
  string(1) "1"
  ["silicone"]=>
  string(1) "1"
  ["thermotec"]=>
  string(1) "1"
  ["thermosoft"]=>
  string(1) "1"
  ["anti_bacterie"]=>
  string(1) "1"
  ["mix"]=>
  string(1) "1"
  ["ventilation_gauche"]=>
  string(2) "sd"
  ["ventilation_droite"]=>
  string(1) "s"
  ["couleur_gauche"]=>
  string(1) "s"
  ["marques"]=>
  string(3) "sds"
  ["models"]=>
  string(1) "s"
  ["couleur_droite"]=>
  string(1) "s"
  ["hoka"]=>
  string(1) "1"
  ["cordon"]=>
  string(1) "1"
  ["pailletes"]=>
  string(1) "1"
  ["fil_nylon"]=>
  string(1) "1"
  ["coude_soupe"]=>
  string(1) "1"
  ["implant"]=>
  string(1) "1"
  ["notas"]=>
  string(1) "s"
}

-->