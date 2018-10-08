
    
    <?php

while ($reg = mysql_fetch_array($sql)) {
    
echo "<pre>"; 
echo var_dump($reg);
echo "</pre>"; 
echo "<hr>"; 
echo "La clave es:  " . $reg[0];
echo "<hr>"; 

}




echo "<hr>"; 
echo "La clave es:  " . $reg[1]['claves_foranea'];
echo "<hr>"; 


$cadena = "int(11)";
$buscar = "int";
$resultado = strpos($cadena, $buscar);
 
if($resultado !== FALSE){
 //   echo "La subcadena '$buscar' fue encontrada "
   //         . "dentro de la cadena '$cadena' en la posición: '$resultado'";
}



