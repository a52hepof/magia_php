<?php 
 /**  
 magia_version: 0.0.8 
 **/
 function test_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM test WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function test_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($test = mysql_fetch_array($sql)) {
        //include "../gestion/test/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $test[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $test[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$test[$campo]\">$test[$campo]</option> \n";
    }
}

function test_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM test  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($test = mysql_fetch_array($sql)) {
    
        include "../gestion/test/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$test[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$test[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$test[0]\">$test[0]</option>";
   echo "value=\"$test[0]\">$test_test</option>";
} 
}
/**/
function test_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM test   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function test_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM test  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function test_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'test_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function test_thead(){    
    $campo_disponibles = test_campos_disponibles();   
    $test_campos_a_mostrar = test_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $test_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function test_tfoot(){    
   test_thead();
}


