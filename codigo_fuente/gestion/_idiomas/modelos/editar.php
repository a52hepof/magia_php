 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _idiomas SET  
 idioma = '$_idiomas_idioma'  
 ,  nombre = '$_idiomas_nombre'  
 WHERE id = '$_idiomas_id' ",$conexion) or die ("Error: ".mysql_error());   
