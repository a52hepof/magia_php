 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _usuarios SET  
 grupo = '$contactos_grupo'  
 WHERE usuario = '$contactos_email' ",$conexion) or die ("Error: ".mysql_error());   
