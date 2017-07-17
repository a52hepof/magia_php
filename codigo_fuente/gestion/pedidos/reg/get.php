<?php
/*
//$id = ($_GET['id'])?mysql_real_escape_string($_GET['id']):null;
//sepone ref en crear
$pedidos_ref        = ($_GET['pedidos_ref'])?mysql_real_escape_string($_GET['pedidos_ref']):null;
$pedidos_email      = ($_GET['pedidos_email'])?mysql_real_escape_string($_GET['pedidos_email']):null;
$pedidos_empresa    = contactos_campo_segun_email('empresa', $pedidos_email);
$pedidos_contacto    = contactos_campo_segun_email('contacto', $pedidos_email);
$pedidos_notas      = ($_GET['pedidos_notas'])?mysql_real_escape_string($_GET['pedidos_notas']):null; 
$pedidos_estatus    = ($_GET['pedidos_estatus'])?mysql_real_escape_string($_GET['pedidos_estatus']):null; 
/*
$payant         = ($_GET['payant'])?mysql_real_escape_string($_GET['payant']):null;
$remake         = ($_GET['remake'])?mysql_real_escape_string($_GET['remake']):null;
$du_numero      = ($_GET['du_numero'])?mysql_real_escape_string($_GET['du_numero']):null;
$perdida_auditiva = ($_GET['perdida_auditiva'])?mysql_real_escape_string($_GET['perdida_auditiva']):null;
$orejera        = ($_GET['orejera'])?mysql_real_escape_string($_GET['orejera']):null;
$bte            = ($_GET['bte'])?mysql_real_escape_string($_GET['bte']):null;
$rite           = ($_GET['rite'])?mysql_real_escape_string($_GET['rite']):null;
$slim_tube      = ($_GET['slim_tube'])?mysql_real_escape_string($_GET['slim_tube']):null;
$custom_dume    = ($_GET['custom_dume'])?mysql_real_escape_string($_GET['custom_dume']):null;
$natation       = ($_GET['natation'])?mysql_real_escape_string($_GET['natation']):null;
$dormir = ($_GET['dormir'])?mysql_real_escape_string($_GET['dormir']):null;
$anti_bruit = ($_GET['anti_bruit'])?mysql_real_escape_string($_GET['anti_bruit']):null;
$invisible = ($_GET['invisible'])?mysql_real_escape_string($_GET['invisible']):null;
$coquille = ($_GET['coquille'])?mysql_real_escape_string($_GET['coquille']):null;
$conduit_seul = ($_GET['conduit_seul'])?mysql_real_escape_string($_GET['conduit_seul']):null;
$epaulemnent = ($_GET['epaulemnent'])?mysql_real_escape_string($_GET['epaulemnent']):null;
$prince_de_crave = ($_GET['prince_de_crave'])?mysql_real_escape_string($_GET['prince_de_crave']):null;
$iros = ($_GET['iros'])?mysql_real_escape_string($_GET['iros']):null;
$resine = ($_GET['resine'])?mysql_real_escape_string($_GET['resine']):null;
$silicone = ($_GET['silicone'])?mysql_real_escape_string($_GET['silicone']):null;
$thermotec = ($_GET['thermotec'])?mysql_real_escape_string($_GET['thermotec']):null;
$thermosoft = ($_GET['thermosoft'])?mysql_real_escape_string($_GET['thermosoft']):null;
$anti_bacterie = ($_GET['anti_bacterie'])?mysql_real_escape_string($_GET['anti_bacterie']):null;
$mix = ($_GET['mix'])?mysql_real_escape_string($_GET['mix']):null;
$ventilation_gauche = ($_GET['ventilation_gauche'])?mysql_real_escape_string($_GET['ventilation_gauche']):null;
$ventilation_droite = ($_GET['ventilation_droite'])?mysql_real_escape_string($_GET['ventilation_droite']):null;
$couleur_gauche = ($_GET['couleur_gauche'])?mysql_real_escape_string($_GET['couleur_gauche']):null;
$marques = ($_GET['marques'])?mysql_real_escape_string($_GET['marques']):null;
$models = ($_GET['models'])?mysql_real_escape_string($_GET['models']):null;
$couleur_droite = ($_GET['couleur_droite'])?mysql_real_escape_string($_GET['couleur_droite']):null;
$hoka = ($_GET['hoka'])?mysql_real_escape_string($_GET['hoka']):null;
$cordon = ($_GET['cordon'])?mysql_real_escape_string($_GET['cordon']):null;
$pailletes = ($_GET['pailletes'])?mysql_real_escape_string($_GET['pailletes']):null;
$fil_nylon = ($_GET['fil_nylon'])?mysql_real_escape_string($_GET['fil_nylon']):null;
$coude_soupe = ($_GET['coude_soupe'])?mysql_real_escape_string($_GET['coude_soupe']):null;
$implant = ($_GET['implant'])?mysql_real_escape_string($_GET['implant']):null;
*/
$descripcion = array();
vardump($descripcion, array('preparo el araay descripcion',__FILE__));
vardump($_GET, array('Valores del $_GET',__FILE__));

foreach ($_GET as $key => $value) {
    $descripcion[$key] = $value; 
}
vardump($descripcion, array('valores del array descripcion()',__FILE__));

$json_descripcion = json_encode($descripcion);

vardump($json_descripcion, array('transformo en json  $json_descripcion ',__FILE__));

