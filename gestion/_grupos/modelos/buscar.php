 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _grupos  
 WHERE  
 grupo like '%$_grupos_grupo%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
