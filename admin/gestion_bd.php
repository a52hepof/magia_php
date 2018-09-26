<?php

/**
 * 
 * @global type $servidor
 * @global type $bdatos
 * @global type $usuario
 * @global type $clave
 */
function gestion_bd_crear_tabla($base_datos) {
    global $servidor, $bdatos, $usuario, $clave;
// Create connection
    $conn = new mysqli($servidor, $usuario, $clave, $bdatos);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = explode(";", file_get_contents("$base_datos.sql"));

    foreach ($sql as $query) {

        if ($conn->query($query) === TRUE) {
            echo "<p>Table: $ query creada con exito</p>";
        } else {
            echo "<p>Error creating table: $query[0] " . $conn->error . "</p>";
        }
    }
    $conn->close();
}

/**
 * Verifica si el nombre de un campo tiene 'id_' al inicio
 * @param type $nombre
 * @return boolean
 */
function bdd_tiene_id_al_inicio($nombre) {
    // verifico si tiene 'id_' al inicio cualquier palabra
    $n = strtolower($nombre);

    // if (strpos($nombre, 'i') == '0' && strpos($nombre, 'd') == '1' && strpos($nombre, '_') == '2') {
    if ($n[0] == 'i' && $n[1] == 'd' && $n[2] == '_') {
        return TRUE;
    } else {
        return FALSE;
    }
}

/**
 * Devuelve el nombre de un campo sin el 'id_' del inicio
 * @param type $nombre
 * @return type
 */
function bdd_quita_id_inicio($nombre) {
    // devuelve la posicion donde encuentra 'id_'
    // asi me aseguro que la tabla empieze bien en 'id_'
    // si es el caso, quito el 'id_'    

    if (bdd_tiene_id_al_inicio($nombre)) {
        // empieza por id_
        return substr($nombre, 3); // empieza en 3 hasta 999 de largo
    } else {
        return $nombre;
    }
}

/**
 * Quita los guiones bajos "_" de un texto 
 * @param type $nombre
 * @return type
 */
function bdd_quita_guiones($nombre) {
    return str_replace('_', " ", $nombre);
}

/**
 * Busca nombre de tabla igual o parecido al dado
 * @param type $tabla Nombre de tabla que buscamos parecidos
 * @param type $lista Lista de nombres disponibles
 * @return type
 */
Function bdd_busca_tabla_con_nombre_igual_o_parecido($tabla) {
    $lista = bdd_lista_tablas_bdd();
    $r = $lista[0];
    $dif = 99999999999; // la diferencia es muy grande al inico
    // devuelve la palabra con menos diferencia

    $i = 0;
    while ($i < count($lista)) {

        $comparacion = levenshtein(strtolower($tabla), strtolower($lista[$i]));

        if ($comparacion < $dif) {
            $r = $lista[$i];
            $dif = $comparacion;
        }

        $i++;
    }

    return $r;
}

/**
 * Busca un campo igual o parecido entre la lista que se le envia
 * @param type $campo Al que se busca parecido
 * @param type $lista_campos Lista de campos para la comparación
 * @return type
 */
Function bdd_campo_con_nombre_igual_o_parecido($campo, $lista_campos) {

    $r = $lista[0];
    $dif = 99999999999; // la diferencia es muy grande al inico
    // devuelve la palabra con menos diferencia

    $i = 0;
    while ($i < count($lista)) {

        $comparacion = levenshtein(strtolower($campo), strtolower($lista_campos[$i]));

        if ($comparacion < $dif) {
            $r = $lista_campos[$i];
            $dif = $comparacion;
        }

        $i++;
    }

    return $r;
}

/**
 * Lista de tablas de la base de datos
 * @global type $dbh Conección
 * @return string Array() devuelto con la lista de tablas
 */
function bdd_lista_tablas_bdd() {
    global $dbh;
    include "./modelos/lista_tablas.php";

    //$l = array("contactos","reservas","casas","empresas");

    $l = array();


    foreach ($resultado as $reg) {
        array_push($l, $reg[0]);
    }

    return $l;
}

/**
 * Lista de campos de una tabla
 * @global type $dbh Coneccion 
 * @param type $tabla De donde se sacara la lista
 * @return string Array() con la lista de campos de la $tabla
 */
function bdd_lista_campos_segun_tabla($tabla) {
    global $dbh;
    $sql = "SHOW COLUMNS FROM $tabla";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
        ":tabla" => "$tabla"
            )
    );
    $resultado = $stmt->fetchAll();


    $data = array();

    foreach ($resultado as $key => $value) {

        $data[$value['Field']] = $value['Field'];
    }

    return $data;
}
?>