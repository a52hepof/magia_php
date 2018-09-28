<?php

/**
 * 
 * @global type $dbh
 * @return array
 */
function bd_tablas() {
    global $dbh;
    $sql = "SHOW FULL TABLES";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
            // ":id_personal"=>"$u_id_personal"
            )
    );
    $resultado = $stmt->fetchAll();

    $r = array();
    foreach ($resultado as $reg) {
        array_push($r, $reg);
    }
    return $r;
}

/**
 * 
 * @global type $dbh
 * @return array
 */
function bd_grupos() {
    global $dbh;
    $sql = "SELECT grupo FROM _grupos  ";

    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
            // ":id_personal"=>"$u_id_personal"
            )
    );
    $resultado = $stmt->fetchAll();

    $r = array();

    foreach ($resultado as $grupo) {

        array_push($r, $grupo);
    }
    return $r;
}

/**
 * 
 * @global type $dbh
 * @param type $tabla
 * @return type
 */
function bd_lista_campos_segun_tabla($tabla) {
    global $dbh;
    include "./modelos/columnas_de_tabla.php";

    $data = array();

    foreach ($resultado as $key => $value) {

        $data[$value['Field']] = $value['Field'];
    }

    return $data;
}
