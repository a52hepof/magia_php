 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _contenido  
 WHERE  
 frase like '%$b%' OR contexto like '%$b%'   

 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
