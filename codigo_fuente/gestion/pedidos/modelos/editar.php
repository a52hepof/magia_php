<?php

$comando = "UPDATE pedidos SET          
     empresa= '$pedidos_empresa'  , 
     contacto= '$pedidos_contacto'  ,
     email= '$pedidos_email'  ,  
     descripcion= '$json_descripcion'  ,  
     notas='$pedidos_notas'  ,  
     estatus='$pedidos_estatus'                        
 WHERE id = '$pedidos_id'";


$sql = mysql_query(" $comando ", $conexion) or die("Error: <br>File: " . __FILE__ . "<br> Line " . __LINE__ . "<br>Error: " . mysql_error());


vardump($sql,array('$sql','Espero un bool(true) ',__FILE__));
vardump($comando,array('$comando','Con todos los datos llenos',__FILE__));
vardump($json_descripcion,array('$json_descripcion',__FILE__));



/*
 $sql = "UPDATE pedidos SET     
     
     empresa= ':pedidos_empresa'  , 
     contacto= ':pedidos_contacto'  ,
     email= ':pedidos_email'  ,  
     descripcion= ':json_descripcion'  ,  
     notas=':pedidos_notas'  ,  
     estatus=':pedidos_estatus'              
          
 WHERE id = ':pedidos_id'";  
 
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
     ":ref"=>"$pedidos_ref"  ,  
     ":empresa"=>"$pedidos_empresa"  , 
     ":contacto"=>"$pedidos_contacto"  ,
     ":email"=>"$pedidos_email"  ,  
     ":descripcion"=>"$json_descripcion"  ,  
     ":notas"=>"$pedidos_notas"  ,  
     ":estatus"=>"1",
     ":pedidos_id"=>"$pedidos_id"  ,  
     
     ) 
 ); 
 * 
 */