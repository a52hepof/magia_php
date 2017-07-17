<?php
//$id = ($_REQUEST['id'])?mysql_real_escape_string($_REQUEST['id']):null;
//sepone ref en crear
$pedidos_ref        = ($_REQUEST['pedidos_ref'])?mysql_real_escape_string($_REQUEST['pedidos_ref']):null;
$pedidos_email      = ($_REQUEST['pedidos_email'])?mysql_real_escape_string($_REQUEST['pedidos_email']):null;
$pedidos_empresa    = contactos_campo_segun_email('empresa', $pedidos_email);
$pedidos_contacto    = contactos_campo_segun_email('contacto', $pedidos_email);
$pedidos_notas      = ($_REQUEST['pedidos_notas'])?mysql_real_escape_string($_REQUEST['pedidos_notas']):null; 
$pedidos_estatus    = ($_REQUEST['pedidos_estatus'])?mysql_real_escape_string($_REQUEST['pedidos_estatus']):null; 
/*
$payant         = ($_REQUEST['payant'])?mysql_real_escape_string($_REQUEST['payant']):null;
$remake         = ($_REQUEST['remake'])?mysql_real_escape_string($_REQUEST['remake']):null;
$du_numero      = ($_REQUEST['du_numero'])?mysql_real_escape_string($_REQUEST['du_numero']):null;
$perdida_auditiva = ($_REQUEST['perdida_auditiva'])?mysql_real_escape_string($_REQUEST['perdida_auditiva']):null;
$orejera        = ($_REQUEST['orejera'])?mysql_real_escape_string($_REQUEST['orejera']):null;
$bte            = ($_REQUEST['bte'])?mysql_real_escape_string($_REQUEST['bte']):null;
$rite           = ($_REQUEST['rite'])?mysql_real_escape_string($_REQUEST['rite']):null;
$slim_tube      = ($_REQUEST['slim_tube'])?mysql_real_escape_string($_REQUEST['slim_tube']):null;
$custom_dume    = ($_REQUEST['custom_dume'])?mysql_real_escape_string($_REQUEST['custom_dume']):null;
$natation       = ($_REQUEST['natation'])?mysql_real_escape_string($_REQUEST['natation']):null;
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
*/
$descripcion = array();
vardump($descripcion, array('preparo el araay descripcion',__FILE__));
vardump($_REQUEST, array('Valores del $_REQUEST',__FILE__));

foreach ($_REQUEST as $key => $value) {
    $descripcion[$key] = $value; 
}
vardump($descripcion, array('valores del array descripcion()',__FILE__));

$json_descripcion = json_encode($descripcion);

vardump($json_descripcion, array('transformo en json  $json_descripcion ',__FILE__));

