 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE pedidos SET  
   estatus = '$estatus'   WHERE id = '$pedidos_id' ",$conexion) or die ("Error: ".mysql_error());   
