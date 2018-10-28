 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE contactos SET  
 idioma = '$contactos_idioma'  
 ,tipo_documento = '$contactos_tipo_documento'  
 ,  ruc_prefijo = '$contactos_ruc_prefijo'  
 ,  numero_documento = '$contactos_numero_documento'  
 ,  empresa = '$contactos_empresa'  
 ,  contacto = '$contactos_contacto'  
 ,  saludo = '$contactos_saludo'  
 ,  direccion = '$contactos_direccion'  
 ,  cpostal = '$contactos_cpostal'  
 ,  ciudad = '$contactos_ciudad'  
 ,  provincia = '$contactos_provincia'  
 ,  pais = '$contactos_pais'  
 ,  tel = '$contactos_tel'  
 ,  fax = '$contactos_fax'  
 ,  email = '$contactos_email'  
 ,  notas = '$contactos_notas'  
 ,  tipo = '$contactos_tipo'  
 ,  es_contacto = '$contactos_es_contacto'  
 ,  estrellas = '$contactos_estrellas'  
 ,  estatus = '$contactos_estatus'  
 WHERE id = '$contactos_id' ",$conexion) or die ("Error: ".mysql_error());   
