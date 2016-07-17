<?php

function _traducir($f, $ccontexto="", $idioma="") {
    echo $f;
}

function _t($frase, $contexto="", $idioma="") {
global $config_idioma_por_defecto; 
   $idioma = (!$idioma)? $config_idioma_por_defecto : $idioma ;
   
   if(!$contexto){
       $contexto = "";
   }

$id_contenido = contenido_id_frase_segun_frase_contexto($frase, $contexto); 


if(!$id_contenido){
    contenido_registra($frase, $contexto);
$id_contenido = contenido_id_frase_segun_frase_contexto($frase, $contexto); 
}
    

// sacamos la traduccion 

$frase_traducida = traduccion_segun_id_contenido_idioma($id_contenido, $idioma);

// si no hay traduccion registramos la traduccicon 

if(!$frase_traducida){
    $traduccion = "$frase"; 
    
    traduccion_registra_traduccion($id_contenido, $idioma, $traduccion);
    $frase_traducida = traduccion_segun_id_contenido_idioma($id_contenido, $idioma);
}
    
    echo $frase_traducida;
}


// si existe devuelve la traduccion sino devuelve falso
function traduccion_segun_id_contenido_idioma($id_contenido,$idioma) {
    global $conexion;
   $sql=mysql_query("SELECT traduccion FROM _traducciones WHERE contenido_id = '$id_contenido' AND idioma = '$idioma' ",$conexion) 
       or die ("Error:".mysql_error());   
   $reg = mysql_fetch_array($sql);
   
    $total = mysql_num_rows($sql);
    if($total > 0){
        return $reg[0] ;
    }else{
        return FALSE;
    } 
    
}
function traduccion_registra_traduccion($id_contenido, $idioma, $traduccion) {
    global $conexion;
   $sql=mysql_query("INSERT INTO _traducciones (contenido_id, idioma, traduccion) VALUES ('$id_contenido','$idioma','$traduccion') ",$conexion) 
   or die ("Error:".mysql_error());     
return 0;
}