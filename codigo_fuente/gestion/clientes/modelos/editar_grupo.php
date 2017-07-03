 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _usuarios SET  
 grupo = '$clientes_grupo'  
 WHERE usuario = '$clientes_email' ",$conexion) or die ("Error: ".mysql_error());   
