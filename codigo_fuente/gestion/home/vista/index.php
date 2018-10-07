<?php 



$array = array(
    "index.php"=>"Inicio", 
    "index.php?p=contactos"=>"Contactos",     
    ); 

bst_dropdowns('Menu', $array); 







echo "<hr>"; 





echo "<pre>"; 
var_dump($array);
echo "</pre>"; 

$json = json_encode($array);

echo "<pre>"; 
var_dump($json);
echo "</pre>"; 

$json_decode = json_decode($json);


echo "<pre>"; 
var_dump($json_decode);
echo "</pre>"; 