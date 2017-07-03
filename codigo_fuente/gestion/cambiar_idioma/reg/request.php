<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  $clientes_id = mysql_real_escape_string($_REQUEST['clientes_id']); 
  $clientes_idioma = mysql_real_escape_string($_REQUEST['clientes_idioma']); 
  $clientes_tipo_documento = mysql_real_escape_string($_REQUEST['clientes_tipo_documento']); 
  $clientes_ruc_prefijo = mysql_real_escape_string($_REQUEST['clientes_ruc_prefijo']); 
  $clientes_numero_documento = mysql_real_escape_string($_REQUEST['clientes_numero_documento']); 
  $clientes_empresa = mysql_real_escape_string($_REQUEST['clientes_empresa']); 
  $clientes_cliente = mysql_real_escape_string($_REQUEST['clientes_cliente']); 
  $clientes_saludo = mysql_real_escape_string($_REQUEST['clientes_saludo']); 
  $clientes_direccion = mysql_real_escape_string($_REQUEST['clientes_direccion']); 
  $clientes_cpostal = mysql_real_escape_string($_REQUEST['clientes_cpostal']); 
  $clientes_ciudad = mysql_real_escape_string($_REQUEST['clientes_ciudad']); 
  $clientes_provincia = mysql_real_escape_string($_REQUEST['clientes_provincia']); 
  $clientes_pais = mysql_real_escape_string($_REQUEST['clientes_pais']); 
  $clientes_tel = mysql_real_escape_string($_REQUEST['clientes_tel']); 
  $clientes_fax = mysql_real_escape_string($_REQUEST['clientes_fax']); 
  $clientes_email = mysql_real_escape_string($_REQUEST['clientes_email']); 
  $clientes_notas = mysql_real_escape_string($_REQUEST['clientes_notas']); 
  $clientes_tipo = mysql_real_escape_string($_REQUEST['clientes_tipo']); 
  $clientes_fecha_registro = mysql_real_escape_string($_REQUEST['clientes_fecha_registro']); 
  $clientes_es_cliente = mysql_real_escape_string($_REQUEST['clientes_es_cliente']); 
  $clientes_estrellas = mysql_real_escape_string($_REQUEST['clientes_estrellas']); 
  $clientes_estatus = mysql_real_escape_string($_REQUEST['clientes_estatus']); 
