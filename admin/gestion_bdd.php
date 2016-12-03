<?php

// quiero obtener 
/**
 * datos de coneccion a la bdd
 * Nombre de la bdd
 * Nombre de una tabla
 * 
 * 
 *  
 * 
 * Si le paso un nombre que me quite el id de ese nombre 
 *      xxxx(id_contacto)
 *      : contacto
 * 
 * 
 * Si le paso un nombre, que me entregue el nombre de una tabla lo mas parecido
 * ejemplo
 *      xxxx(contaco)
 *     tabla [contactos]
 * 
 * 
 * 
 * 
 * 
 */
function bdd_tiene_id_al_inicio($nombre) {
    // verifico si tiene 'id_' al inicio cualquier palabra

    if (strpos($nombre, 'i') == '0' && strpos($nombre, 'd') == '1' && strpos($nombre, '_') == '2') {
        return TRUE;
    } else {
        return FALSE;
    }
}

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
 * Buscamos una palabra parecida entre una lista
 * @param type $nombre alque buscamos un igual o parecido
 * @param type $lista lista de nombres que deseamos comparar
 * @return type devuelve el valor mas parecido
 */
Function bdd_busca_tabla_con_nombre_igual_o_parecido($nombre, $lista) { 
    
    $r = $lista[0];
    $dif = 99999999999; // la diferencia es muy grande al inico
    // devuelve la palabra con menos diferencia
    
    $i = 0;
    while ($i < count($lista)) {
        
         $comparacion = levenshtein(strtolower($nombre), strtolower($lista[$i]));

        if ($comparacion < $dif) {
             $r = $lista[$i];
            $dif = $comparacion;
            echo "$dif $nombre $lista[$i]<br>";

        }
        
        $i++;
    }
    
    return $r;
}



$lista = array("r", "ro", "robinsd","robinfd","contactenos",'robincoell');

echo "<hr>"; 
echo bdd_busca_tabla_con_nombre_igual_o_parecido('robin', $lista);
?>