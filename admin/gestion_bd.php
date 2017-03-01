<?php


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

function bdd_quita_guiones($nombre) {     
    return str_replace('_', " ", $nombre);
}
/*
 * 
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
/**
 * Busca un campo parecido o igual entre la lista que se le envia
 * @param type $campo
 * @param type $lista_campos
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

function bdd_lista_tablas_bdd(){
    global $dbh;
    include "./modelos/lista_tablas.php";
    
    //$l = array("contactos","reservas","casas","empresas");
    
    $l = array("Robinson","Coello");
    
    
    foreach ($resultado as $reg) {
        array_push($l, $reg[0]);
        
    }
    
    return $l;
    
    
}
function bdd_lista_campos_segun_tabla($tabla){
    global $dbh;
    include "./modelos/columnas_de_tabla.php";
    
    //$l = array("contactos","reservas","casas","empresas");
    
    $l = array("Robinson","Coello");
    
    
    foreach ($resultado as $reg) {
        array_push($l, $reg[0]);
        
    }
    
    return $l;
    
    
}


?>



