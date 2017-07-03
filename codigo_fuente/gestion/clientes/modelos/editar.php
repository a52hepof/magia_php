 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE clientes SET  
 idioma = '$clientes_idioma'  
 ,tipo_documento = '$clientes_tipo_documento'  
 ,  ruc_prefijo = '$clientes_ruc_prefijo'  
 ,  numero_documento = '$clientes_numero_documento'  
 ,  empresa = '$clientes_empresa'  
 ,  cliente = '$clientes_cliente'  
 ,  saludo = '$clientes_saludo'  
 ,  direccion = '$clientes_direccion'  
 ,  cpostal = '$clientes_cpostal'  
 ,  ciudad = '$clientes_ciudad'  
 ,  provincia = '$clientes_provincia'  
 ,  pais = '$clientes_pais'  
 ,  tel = '$clientes_tel'  
 ,  fax = '$clientes_fax'  
 ,  email = '$clientes_email'  
 ,  notas = '$clientes_notas'  
 ,  tipo = '$clientes_tipo'  
 ,  es_cliente = '$clientes_es_cliente'  
 ,  estrellas = '$clientes_estrellas'  
 ,  estatus = '$clientes_estatus'  
 WHERE id = '$clientes_id' ",$conexion) or die ("Error: ".mysql_error());   
