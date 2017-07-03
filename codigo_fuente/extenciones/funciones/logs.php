<?php 
 /**  
 magia_version: 0.0.8 
 **/
 function logs_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM logs WHERE id = $id   ", $conexion) or die("Error: logs_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}function logs_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($logs = mysql_fetch_array($sql)) {
        //include "../gestion/logs/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $logs[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $logs[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$logs[$campo]\">$logs[$campo]</option> \n";
    }
}

function logs_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM logs  ",$conexion) or die ("Error:".mysql_error());
while ($logs = mysql_fetch_array($sql)) {
    
        include "../gestion/logs/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$logs[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$logs[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$logs[0]\">$logs[0]</option>";
   echo "value=\"$logs[0]\">$logs_logs</option>";
} 
}

function logs_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM logs   ", $conexion) or die("Error: logs_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}