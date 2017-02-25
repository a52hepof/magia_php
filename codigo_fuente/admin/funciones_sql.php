<?php 
// limpia la cadena para registro en sql
// 

function sql_limpia_despues_reg($cadena){
    
    $cadena=implode("",explode("\\",$cadena));
    
    $cadena =  stripslashes(trim($cadena));
    
    return htmlspecialchars(stripslashes(trim($cadena)));
}

function sql_quita_barra_invertida($frase){
    return stripslashes($frase);
}
function sql_pone_barra_invertida($frase){
    return addslashes($frase);
}