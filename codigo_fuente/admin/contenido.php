<?php

// si existe devuelve la traduccion sino devuelve falso
function contenido_id_frase_segun_frase_contexto($frase,$contexto="") {
    global $conexion;
    
    if(!$contexto){
        $filtro = " WHERE frase = '$frase' AND contexto ='' "; 
    } else {
        $filtro = " WHERE frase = '$frase' AND contexto = '$contexto'  "; 
    }
        
   $sql=mysql_query("SELECT id FROM _contenido $filtro ",$conexion) 
       or die ("Error:".mysql_error());   
   $reg = mysql_fetch_array($sql);
   
    $total = mysql_num_rows($sql);
    if($total > 0){
        return $reg[0];
    } else {
        return FALSE;
    } 
    
}
function contenido_registra($frase,$contexto="") {
    global $conexion;
    
    if(!$contexto){
        $contexto = null;
    }
    
   $sql=mysql_query("INSERT INTO _contenido (frase, contexto) "
           . "VALUES ('$frase','$contexto') ",$conexion) 
   or die ("Error:".mysql_error());        
   
return 0;
}