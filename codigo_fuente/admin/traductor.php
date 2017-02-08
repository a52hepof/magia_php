<?php
function _t($frase, $contexto = "", $idioma = "") {
    global $conexion, $cfg_idioma;
    if (!$idioma) {
        $idioma = $cfg_idioma;
    }
    $frase = _tr($frase, $contexto);
    
    echo "$frase";
}

function _tr($frase, $contexto = "", $idioma = '') {
    global $conexion;
    global $conexion, $cfg_idioma;
    if (!$idioma) {
        $idioma = $cfg_idioma;
    }


    /*
     * Busco si la frase esta registrada en la base de datos
     * Si no esta la registro
     * Busco si tiene una traduccion 
     * 
     * 
     */


    if (!contenido_existe_frase_en_contenido($frase, $contexto = "")) {

        contenido_registrar_frase($frase, $contexto = "");
    }


    if (!traductor_buscar_traduccion($frase, $idioma)) {

        if($idioma == 'es_ES'){
            traductor_registrar_traduccion($frase, $idioma, $frase);
        }else{
            traductor_registrar_traduccion($frase, $idioma, '---');
        }
    }



     return traductor_buscar_traduccion($frase, $idioma);


    return $frase;
}

function traductor_buscar_traduccion($frase, $idioma) {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);

    $comando = "SELECT traduccion FROM _traducciones WHERE frase = '$frase' AND idioma = '$idioma'  ";
    $sql = mysql_query("$comando  ", $conexion) or die("Problemas traductor_buscar_traduccion: " . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg['traduccion'];
    } else {
        return FALSE;
    }
}

//***********************************************************
function traductor_registrar_traduccion($frase, $idioma, $traduccion) {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $traduccion = sql_pone_barra_invertida($traduccion);


    $sql = mysql_query(""
            . "INSERT INTO _traducciones "
            . "(frase, idioma, traduccion) "
            . "VALUES ('$frase','$idioma','$traduccion')  ", $conexion) or die("Error" . mysql_error());
}

//***********************************************************
function traductor_actualiza_traduccion($id_frase, $idioma, $traduccion) {
    global $conexion;

    $frase = sql_pone_barra_invertida($frase);
    $traduccion = sql_pone_barra_invertida($traduccion);



    $sql = mysql_query("UPDATE traducciones SET traduccion = '$traduccion' WHERE id_frase = $id_frase AND idioma = '$idioma'  ", $conexion) or die(" traductor_actualiza_traduccion() " . mysql_error());
}
