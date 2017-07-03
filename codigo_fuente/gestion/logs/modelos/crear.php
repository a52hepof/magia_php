 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO logs ( 
  usuario  ,  p  ,  c  ,  a  ,  id_pedido  ,  argumento  ) VALUES ( 
  :usuario  ,  :p  ,  :c  ,  :a  ,  :id_pedido  ,  :argumento    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
  ":usuario"=>"$logs_usuario"  ,  ":p"=>"$logs_p"  ,  ":c"=>"$logs_c"  ,  ":a"=>"$logs_a"  ,  ":id_pedido"=>"$logs_id_pedido"  ,  ":argumento"=>"$logs_argumento"              ) 
 ); 
 
