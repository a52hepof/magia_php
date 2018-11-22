 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" DELETE FROM contactos WHERE email = '$contactos_email' ",$conexion) or die ("Error: ".mysql_error());   

