 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _contenido  
 WHERE  
 frase like '%$_contenido_frase%'    
 AND  contexto like '%$_contenido_contexto%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
