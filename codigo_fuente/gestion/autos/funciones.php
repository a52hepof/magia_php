<?php

/**
  magia_version: 0.0.11
 * */

/**
 * Otiene un valor del $campo de la tabla autos segun el $id que le pase 
 * @global type $conexion
 * @param type $campo Nombre de $campo 
 * @param type $id identificador del registro el cual deseo el valor del $campo
 * @return boolean Regreso el $campo o false segun exista o no
 */ function autos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM autos WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function autos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM autos order by $campo   ", $conexion)
            or error(__DIR__, __FILE__, __LINE__);
    while ($autos = mysql_fetch_array($sql)) {
        //include "../gestion/autos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $autos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $autos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$autos[$campo]\">$autos[$campo]</option> \n";
    }
}

/**
 * @todo poner un array de valores a excluir, 
 * @todo quitar de la lista los valores a excluir, actualmente solo desactivados 
 * Crea los items de un select de la tabla autos
 * <pre>
 * <option value="$autos[0]">$autos[0]</option>
 * </pre>
 * @global type $conexion
 * @param type $selecionado valor a ser seleccionado 
 * @param type $excluir Valor a excluir de la lista
 * @return type html <option>
 */
function autos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT placa FROM autos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    while ($autos = mysql_fetch_array($sql)) {

        include "./gestion/autos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $autos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $autos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$autos[0]\">$autos[0]</option>";
        echo "value=\"$autos[0]\">$autos[0]</option>";
    }
}

/**/

function autos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM autos   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function autos_campos_disponibles() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SHOW COLUMNS FROM autos  ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }

    return $data;
}

/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function autos_campos_a_mostrar() {
    global $conexion;
    $data = array();
    $sql = mysql_query("SELECT valor FROM _opciones WHERE opcion = 'autos_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);

    $reg = mysql_fetch_array($sql);

    return json_decode($reg[0], true);
}

function autos_thead($ganchos = array()) {

    $campo_disponibles = autos_campos_disponibles();
    $autos_campos_a_mostrar = autos_campos_a_mostrar();
    echo "
     <thead>
        <tr> ";
    echo "<th>" . _tr("#") . "</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {
        if (in_array($value, $autos_campos_a_mostrar)) {
            echo "<th>" . _tr($value) . "</th> ";
        }
    }


    if ($gancho) {
        $i = 0;
        while ($i < count($gancho)) {
            echo "<th>$gancho[$i]</th>";
            $i++;
        }
    }




    echo "<th>" . _tr("Acción") . "</th> "; // accion             
    echo "    </tr>
    </thead>";
}

/**
 * 
 */
function autos_tfoot() {
    autos_thead();
}

