 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" DELETE FROM _contactos WHERE email = '$_contactos_email' ",$conexion) or die ("Error: ".mysql_error());   

