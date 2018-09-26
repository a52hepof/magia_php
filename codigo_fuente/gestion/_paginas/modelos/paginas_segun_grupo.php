 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _permisos  
 WHERE  
 grupo like '%$_paginas_grupo%'    
 ORDER BY pagina ASC    
 ",$conexion) or die ("Error:".mysql_error());  
