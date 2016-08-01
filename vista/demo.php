<?php

while ($reg = mysql_fetch_array($sql)) {
    
//echo "<pre>"; 
//echo var_dump($reg);
//echo "</pre>"; 
}


$cadena = "int(11)";
$buscar = "int";
$resultado = strpos($cadena, $buscar);
 
if($resultado !== FALSE){
    echo "La subcadena '$buscar' fue encontrada "
            . "dentro de la cadena '$cadena' en la posición: '$resultado'";
}