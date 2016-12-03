<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// para crear la tabla 
function gestion_bd_crear_tabla() {
    global $servidor, $bdatos, $usuario, $clave;
// Create connection
    $conn = new mysqli($servidor, $usuario, $clave, $bdatos);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = explode(";", file_get_contents('bd_extructura.sql'));

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
    $nombre = strtolower($nombre);

    if (strpos($nombre, 'i') == '0' && strpos($nombre, 'd') == '1' && strpos($nombre, '_') == '2') {
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
        // echo strpos($nombre,'id_') ;
    } else {
        return $nombre;
    }
}

/**
 * Buscamos una tabla parecida entre una lista dada
 * @param type $nombre alque buscamos un igual o parecido
 * @param type $lista lista de nombres que deseamos comparar
 * @return type devuelve el valor mas parecido
 */
Function bdd_busca_tabla_con_nombre_igual_o_parecido($tabla, $lista) {

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


?>

