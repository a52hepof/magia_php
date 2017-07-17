<?php
/*
//$id = ($_POST['id'])?mysql_real_escape_string($_POST['id']):null;
//sepone ref en crear
$pedidos_ref        = ($_POST['pedidos_ref'])?mysql_real_escape_string($_POST['pedidos_ref']):null;
$pedidos_email      = ($_POST['pedidos_email'])?mysql_real_escape_string($_POST['pedidos_email']):null;
$pedidos_empresa    = contactos_campo_segun_email('empresa', $pedidos_email);
$pedidos_contacto    = contactos_campo_segun_email('contacto', $pedidos_email);
$pedidos_notas      = ($_POST['pedidos_notas'])?mysql_real_escape_string($_POST['pedidos_notas']):null; 
$pedidos_estatus    = ($_POST['pedidos_estatus'])?mysql_real_escape_string($_POST['pedidos_estatus']):null; 
/*
$payant         = ($_POST['payant'])?mysql_real_escape_string($_POST['payant']):null;
$remake         = ($_POST['remake'])?mysql_real_escape_string($_POST['remake']):null;
$du_numero      = ($_POST['du_numero'])?mysql_real_escape_string($_POST['du_numero']):null;
$perdida_auditiva = ($_POST['perdida_auditiva'])?mysql_real_escape_string($_POST['perdida_auditiva']):null;
$orejera        = ($_POST['orejera'])?mysql_real_escape_string($_POST['orejera']):null;
$bte            = ($_POST['bte'])?mysql_real_escape_string($_POST['bte']):null;
$rite           = ($_POST['rite'])?mysql_real_escape_string($_POST['rite']):null;
$slim_tube      = ($_POST['slim_tube'])?mysql_real_escape_string($_POST['slim_tube']):null;
$custom_dume    = ($_POST['custom_dume'])?mysql_real_escape_string($_POST['custom_dume']):null;
$natation       = ($_POST['natation'])?mysql_real_escape_string($_POST['natation']):null;
$dormir = ($_POST['dormir'])?mysql_real_escape_string($_POST['dormir']):null;
$anti_bruit = ($_POST['anti_bruit'])?mysql_real_escape_string($_POST['anti_bruit']):null;
$invisible = ($_POST['invisible'])?mysql_real_escape_string($_POST['invisible']):null;
$coquille = ($_POST['coquille'])?mysql_real_escape_string($_POST['coquille']):null;
$conduit_seul = ($_POST['conduit_seul'])?mysql_real_escape_string($_POST['conduit_seul']):null;
$epaulemnent = ($_POST['epaulemnent'])?mysql_real_escape_string($_POST['epaulemnent']):null;
$prince_de_crave = ($_POST['prince_de_crave'])?mysql_real_escape_string($_POST['prince_de_crave']):null;
$iros = ($_POST['iros'])?mysql_real_escape_string($_POST['iros']):null;
$resine = ($_POST['resine'])?mysql_real_escape_string($_POST['resine']):null;
$silicone = ($_POST['silicone'])?mysql_real_escape_string($_POST['silicone']):null;
$thermotec = ($_POST['thermotec'])?mysql_real_escape_string($_POST['thermotec']):null;
$thermosoft = ($_POST['thermosoft'])?mysql_real_escape_string($_POST['thermosoft']):null;
$anti_bacterie = ($_POST['anti_bacterie'])?mysql_real_escape_string($_POST['anti_bacterie']):null;
$mix = ($_POST['mix'])?mysql_real_escape_string($_POST['mix']):null;
$ventilation_gauche = ($_POST['ventilation_gauche'])?mysql_real_escape_string($_POST['ventilation_gauche']):null;
$ventilation_droite = ($_POST['ventilation_droite'])?mysql_real_escape_string($_POST['ventilation_droite']):null;
$couleur_gauche = ($_POST['couleur_gauche'])?mysql_real_escape_string($_POST['couleur_gauche']):null;
$marques = ($_POST['marques'])?mysql_real_escape_string($_POST['marques']):null;
$models = ($_POST['models'])?mysql_real_escape_string($_POST['models']):null;
$couleur_droite = ($_POST['couleur_droite'])?mysql_real_escape_string($_POST['couleur_droite']):null;
$hoka = ($_POST['hoka'])?mysql_real_escape_string($_POST['hoka']):null;
$cordon = ($_POST['cordon'])?mysql_real_escape_string($_POST['cordon']):null;
$pailletes = ($_POST['pailletes'])?mysql_real_escape_string($_POST['pailletes']):null;
$fil_nylon = ($_POST['fil_nylon'])?mysql_real_escape_string($_POST['fil_nylon']):null;
$coude_soupe = ($_POST['coude_soupe'])?mysql_real_escape_string($_POST['coude_soupe']):null;
$implant = ($_POST['implant'])?mysql_real_escape_string($_POST['implant']):null;
*/
$descripcion = array();
vardump($descripcion, array('preparo el araay descripcion',__FILE__));
vardump($_POST, array('Valores del $_POST',__FILE__));

foreach ($_POST as $key => $value) {
    $descripcion[$key] = $value; 
}
vardump($descripcion, array('valores del array descripcion()',__FILE__));

$json_descripcion = json_encode($descripcion);

vardump($json_descripcion, array('transformo en json  $json_descripcion ',__FILE__));

