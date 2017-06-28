<?php

/**
  magia_version: 0.0.8
 * */
function _grupos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _grupos WHERE id = $id   ", $conexion) or die("Error: _grupos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function _grupos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_grupos = mysql_fetch_array($sql)) {
        //include "../gestion/_grupos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_grupos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_grupos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_grupos[$campo]\">$_grupos[$campo]</option> \n";
    }
}

function _grupos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _grupos order by grupo desc ", $conexion) or die("Error:" . mysql_error());




    while ($_grupos = mysql_fetch_array($sql)) {

        include "../gestion/_grupos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_grupos_grupo) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_grupos_grupo) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_grupos[0]\">$_grupos[0]</option>";
        echo "value=\"$_grupos_grupo\">". ucfirst(_tr($_grupos_grupo))."</option>";
    }
}

function _grupos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _grupos   ", $conexion) or die("Error: _grupos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function _grupos_array_grupos() {
    global $conexion;
    $sql = mysql_query(
            "SELECT grupo FROM _grupos ORDER BY grupo  ", $conexion)
            or die("Error: _grupos_array_grupos()" . mysql_error());
    
    $g = array();
    
    while ($reg = mysql_fetch_array($sql)) {
        
        array_push($g, $reg[0]);
                
    }
    
    return $g;
}
function _grupos_array() {
    global $conexion;
    
    $g = array(); 
    
    $sql = mysql_query(
            "SELECT * FROM _grupos  ", $conexion) or die("Error: _grupos_array()" . mysql_error());
            
    while ($reg = mysql_fetch_array($sql)){

    array_push($g, $reg['grupo']);
    
    
    }
    
    return $g;
}
