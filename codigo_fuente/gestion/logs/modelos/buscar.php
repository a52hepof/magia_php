 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM logs  
 WHERE  
 fecha like '%$logs_fecha%'    
 AND  usuario like '%$logs_usuario%'    
 AND  p like '%$logs_p%'    
 AND  c like '%$logs_c%'    
 AND  a like '%$logs_a%'    
 AND  id_pedido like '%$logs_id_pedido%'    
 AND  argumento like '%$logs_argumento%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
