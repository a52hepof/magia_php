<?php 
 /**  
 magia_version: 0.0.8 
 **/
 function actualizaciones_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM actualizaciones WHERE id = $id   ", $conexion) or die("Error: actualizaciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}function actualizaciones_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($actualizaciones = mysql_fetch_array($sql)) {
        //include "../gestion/actualizaciones/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $actualizaciones[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $actualizaciones[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$actualizaciones[$campo]\">$actualizaciones[$campo]</option> \n";
    }
}

function actualizaciones_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM actualizaciones  ",$conexion) or die ("Error:".mysql_error());
while ($actualizaciones = mysql_fetch_array($sql)) {
    
        include "../gestion/actualizaciones/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$actualizaciones[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$actualizaciones[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$actualizaciones[0]\">$actualizaciones[0]</option>";
   echo "value=\"$actualizaciones[0]\">$actualizaciones_actualizaciones</option>";
} 
}

function actualizaciones_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM actualizaciones   ", $conexion) or die("Error: actualizaciones_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}