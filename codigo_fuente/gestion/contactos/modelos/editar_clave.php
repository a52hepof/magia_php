 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _usuarios SET  
 clave = '$_contactos_clave'  
 WHERE usuario = '$_contactos_email' ",$conexion) or die ("Error: ".mysql_error());   
