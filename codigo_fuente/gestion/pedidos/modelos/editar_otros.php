 <?php  
        
         
 $sql=mysql_query(" UPDATE pedidos SET  
   descripcion = '$pedidos_descripcion'  
 ,  empresa = '$pedidos_empresa' 
 ,  contacto = '$pedidos_contacto' 
 ,  email = '$pedidos_email' 
 ,  notas = '$pedidos_notas' 
 ,  estatus = '$pedidos_estatus' 
     
 WHERE id = '$pedidos_id' ",$conexion) or 

         
         die ("Error: <br>File: " . __FILE__ ."<br> Line ". __LINE__ ."<br>Error: ".mysql_error());   
