 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO pedidos ( 
 ref  ,  empresa  ,  contacto  ,  email  ,  descripcion   ,  notas  ,  estatus  ) VALUES ( 
 :ref  ,  :empresa  ,  :contacto  ,  :email  ,  :descripcion   ,  :notas  ,  :estatus    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
     ":ref"=>"$pedidos_ref"  ,  
     ":empresa"=>"$pedidos_empresa"  , 
     ":contacto"=>"$pedidos_contacto"  ,
     ":email"=>"$pedidos_email"  ,  
     ":descripcion"=>"$json_descripcion"  ,  
     ":notas"=>"$pedidos_notas"  ,  
     ":estatus"=>"1"              
     
     ) 
 ); 
# Debug mode 

 
