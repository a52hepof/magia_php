 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" 
 DELETE FROM  
 test  
 WHERE id = '$test_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__); 
  
 $mensaje = "Realizado"; 
