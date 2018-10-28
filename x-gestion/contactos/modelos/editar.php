 <?php  
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query(" UPDATE _contactos SET  
 idioma = '$_contactos_idioma'  
 ,tipo_documento = '$_contactos_tipo_documento'  
 ,  ruc_prefijo = '$_contactos_ruc_prefijo'  
 ,  numero_documento = '$_contactos_numero_documento'  
 ,  empresa = '$_contactos_empresa'  
 ,  contacto = '$_contactos_contacto'  
 ,  saludo = '$_contactos_saludo'  
 ,  direccion = '$_contactos_direccion'  
 ,  cpostal = '$_contactos_cpostal'  
 ,  ciudad = '$_contactos_ciudad'  
 ,  provincia = '$_contactos_provincia'  
 ,  pais = '$_contactos_pais'  
 ,  tel = '$_contactos_tel'  
 ,  fax = '$_contactos_fax'  
 ,  email = '$_contactos_email'  
 ,  notas = '$_contactos_notas'  
 ,  tipo = '$_contactos_tipo'  
 ,  es_contacto = '$_contactos_es_contacto'  
 ,  estrellas = '$_contactos_estrellas'  
 ,  estatus = '$_contactos_estatus'  
 WHERE id = '$_contactos_id' ",$conexion) or die ("Error: ".mysql_error());   
