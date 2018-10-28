<?php

function parkings_go() {
    echo "parking_go";
}

function parkings_id_array() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT id FROM parkings  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        array_push($data, $reg[0]);
    }

    return $data;
}

function parkings_array_segun_campo($campo, $where=false) {
    global $conexion;
    
    $donde = ($where)? " WHERE $where " : "" ;
    
    
    $data = array();
    $sql = mysql_query("SELECT $campo FROM parkings $donde  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        array_push($data, $reg[0]);
    }

    return $data;
}
