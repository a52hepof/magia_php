 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql = "INSERT INTO _idiomas ( 
 idioma  ,  nombre  ) VALUES ( 
 :idioma  ,  :nombre    )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":idioma"=>"$_idiomas_idioma"  ,  ":nombre"=>"$_idiomas_nombre"              ) 
 ); 
 $mensaje = "Realizado con exito"; 
