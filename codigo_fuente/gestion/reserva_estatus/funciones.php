<?php 
 /**  
 magia_version: 0.0.11 
 **/
/**
            * Otiene un valor del $campo de la tabla reserva_estatus segun el $id que le pase 
            * @global type $conexion
            * @param type $campo Nombre de $campo 
            * @param type $id identificador del registro el cual deseo el valor del $campo
            * @return boolean Regreso el $campo o false segun exista o no
            */ function reserva_estatus_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM reserva_estatus WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}



function reserva_estatus_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($reserva_estatus = mysql_fetch_array($sql)) {
        //include "../gestion/reserva_estatus/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $reserva_estatus[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $reserva_estatus[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$reserva_estatus[$campo]\">$reserva_estatus[$campo]</option> \n";
    }
}
/**
 * @todo poner un array de valores a excluir, 
 * @todo quitar de la lista los valores a excluir, actualmente solo desactivados 
 * Crea los items de un select de la tabla reserva_estatus
 * <pre>
 * <option value="$reserva_estatus[0]">$reserva_estatus[0]</option>
 * </pre>
 * @global type $conexion
 * @param type $selecionado valor a ser seleccionado 
 * @param type $excluir Valor a excluir de la lista
 * @return type html <option>
 */
function reserva_estatus_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM reserva_estatus  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($reserva_estatus = mysql_fetch_array($sql)) {
    
        include "./gestion/reserva_estatus/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$reserva_estatus[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$reserva_estatus[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$reserva_estatus[0]\">$reserva_estatus[0]</option>";
   echo "value=\"$reserva_estatus[0]\">$reserva_estatus_reserva_estatus</option>";
} 
}
/**/
function reserva_estatus_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM reserva_estatus   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function reserva_estatus_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM reserva_estatus  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function reserva_estatus_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'reserva_estatus_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function reserva_estatus_thead($ganchos=array()){
    
    $campo_disponibles = reserva_estatus_campos_disponibles();   
    $reserva_estatus_campos_a_mostrar = reserva_estatus_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $reserva_estatus_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    

    if ($gancho) {
        $i = 0;
        while ($i < count($gancho)) {
            echo "<th>$gancho[$i]</th>";
            $i++;
        }
    }
    



    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function reserva_estatus_tfoot(){    
   reserva_estatus_thead();
}


