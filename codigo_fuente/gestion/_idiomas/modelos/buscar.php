 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _idiomas  
 WHERE  
 idioma like '%$_idiomas_idioma%'    
 AND  nombre like '%$_idiomas_nombre%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
