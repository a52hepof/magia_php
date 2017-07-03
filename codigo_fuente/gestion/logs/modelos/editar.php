 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE logs SET  
 fecha = '$logs_fecha'  
 ,  usuario = '$logs_usuario'  
 ,  p = '$logs_p'  
 ,  c = '$logs_c'  
 ,  a = '$logs_a'  
 ,  id_pedido = '$logs_id_pedido'  
 ,  argumento = '$logs_argumento'  
 WHERE id = '$logs_id' ",$conexion) or die ("Error: ".mysql_error());   
