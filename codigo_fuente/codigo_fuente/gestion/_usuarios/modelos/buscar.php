 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _usuarios  
 WHERE  
 grupo like '%$t_usuarios_grupo%'    
 AND  usuario like '%$t_usuarios_usuario%'    
 AND  clave like '%$t_usuarios_clave%'    
 AND  estatus like '%$t_usuarios_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
