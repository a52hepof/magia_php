 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _permisos  
 WHERE  
 grupo like '%$_permisos_grupo%'    
 AND  pagina like '%$_permisos_pagina%'    
 AND  permiso like '%$_permisos_permiso%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
