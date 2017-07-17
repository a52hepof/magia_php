<?php

$payant_checked     = (isset($data['payant'])) ? " checked " : " ";
$remake_checked     = (isset($data['remake'])) ? " checked " : " ";

//$perte_auditive = (isset($data['perte_auditive'])) ? " checked " : " ";
switch ($data['perdida_auditiva']) {
    case 'legere':
        $perdida_auditiva_legere = ' checked="" ' ;
        $perdida_auditiva_moyenne= ' ' ; 
        $perdida_auditiva_grave= ' ' ;
        break;
    case 'moyenne':
        $perdida_auditiva_legere = '  ' ;
        $perdida_auditiva_moyenne= ' checked=""  ' ; 
        $perdida_auditiva_grave= ' ' ;
        break;
    case 'grave':
        $perdida_auditiva_legere = ' ' ;
        $perdida_auditiva_moyenne= ' ' ; 
        $perdida_auditiva_grave= 'checked=""  ' ;
        break;

    default:
        $perdida_auditiva_legere = ' ' ;
        $perdida_auditiva_moyenne= ' ' ; 
        $perdida_auditiva_grave= ' ' ;
        break;
}

//$orejera = (isset($data['orejera'])) ? " checked " : " ";
switch ($data['orejera']) {
    case 'molle':
        $orejera_molle = " checked "; 
        $orejera_dure = " "; 
        break;
    case 'dure':
        $orejera_molle = "  "; 
        $orejera_dure = " checked "; 
        break;

    default:
        $orejera_molle = "  "; 
        $orejera_dure = " "; 
        break;
}



//
$bte_checked = (isset($data['bte'])) ? " checked " : " ";
$rite_checked = (isset($data['rite'])) ? " checked " : " ";
$slim_tube_checked = (isset($data['slim_tube'])) ? " checked " : " ";
$custom_dume_checked = (isset($data['custom_dume'])) ? " checked " : " ";
$natation_checked = (isset($data['natation'])) ? " checked " : " ";
$dormir_checked = (isset($data['dormir'])) ? " checked " : " ";
$anti_bruit_checked = (isset($data['anti_bruit'])) ? " checked " : " ";
$invisible_checked = (isset($data['invisible'])) ? " checked " : " ";
$coquille_checked = (isset($data['coquille'])) ? " checked " : " ";
$conduit_seul_checked = (isset($data['conduit_seul'])) ? " checked " : " ";
$epaulemnent_checked = (isset($data['epaulemnent'])) ? " checked " : " ";
$prince_de_crave_checked = (isset($data['prince_de_crave'])) ? " checked " : " ";
$iros_checked = (isset($data['iros'])) ? " checked " : " ";
$resine_checked = (isset($data['resine'])) ? " checked " : " ";
$silicone_checked = (isset($data['silicone'])) ? " checked " : " ";
$thermotec_checked = (isset($data['thermotec'])) ? " checked " : " ";
$thermosoft_checked = (isset($data['thermosoft'])) ? " checked " : " ";
$anti_bacterie_checked = (isset($data['anti_bacterie'])) ? " checked " : " ";
$mix_checked = (isset($data['mix'])) ? " checked " : " ";
$hoka_checked = (isset($data['hoka'])) ? " checked " : " ";
$cordon_checked = (isset($data['cordon'])) ? " checked " : " ";
$pailletes_checked = (isset($data['pailletes'])) ? " checked " : " ";
$fil_nylon_checked = (isset($data['fil_nylon'])) ? " checked " : " ";
$coude_soupe_checked = (isset($data['coude_soupe'])) ? " checked " : " ";
$implant_checked = (isset($data['implant'])) ? " checked " : " ";
//*******************
$du_numero  = (isset($data['du_numero'])) ? "$data[du_numero]" : ""; 
$marques = (isset($data['marques'])) ? "$data[marques]" : "";
$models = (isset($data['models'])) ? "$data[models]" : "";
$ventilation_gauche = (isset($data['ventilation_gauche'])) ? "$data[ventilation_gauche]" : "";
$ventilation_droite = (isset($data['ventilation_droite'])) ? "$data[ventilation_droite]" : "";
$couleur_gauche = (isset($data['couleur_gauche'])) ? "$data[couleur_gauche]" : "";
$couleur_droite = (isset($data['couleur_droite'])) ? "$data[couleur_droite]" : "";
$notas = (isset($data['notas'])) ? "$data[notas]" : "";
