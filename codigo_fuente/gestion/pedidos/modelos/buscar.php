 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 

 
 $sql=mysql_query( 
         "SELECT *  
 FROM pedidos  
 WHERE  
 id like '%$pedidos_id%'  
 AND ref like '%$pedidos_ref%'    
 AND  empresa like '%$pedidos_empresa%'    
 AND  contacto like '%$pedidos_contacto%'    
 AND  email like '%$pedidos_email%'      
 AND  fecha like '%$pedidos_fecha%'    
 AND  notas like '%$pedidos_notas%'    
 AND  estatus like '%$pedidos_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  

