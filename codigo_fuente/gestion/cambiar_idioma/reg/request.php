<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  $_contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']); 
  $_contactos_idioma = mysql_real_escape_string($_REQUEST['contactos_idioma']); 
  $_contactos_tipo_documento = mysql_real_escape_string($_REQUEST['contactos_tipo_documento']); 
  $_contactos_ruc_prefijo = mysql_real_escape_string($_REQUEST['contactos_ruc_prefijo']); 
  $_contactos_numero_documento = mysql_real_escape_string($_REQUEST['contactos_numero_documento']); 
  $_contactos_empresa = mysql_real_escape_string($_REQUEST['contactos_empresa']); 
  $_contactos_contacto = mysql_real_escape_string($_REQUEST['contactos_contacto']); 
  $_contactos_saludo = mysql_real_escape_string($_REQUEST['contactos_saludo']); 
  $_contactos_direccion = mysql_real_escape_string($_REQUEST['contactos_direccion']); 
  $_contactos_cpostal = mysql_real_escape_string($_REQUEST['contactos_cpostal']); 
  $_contactos_ciudad = mysql_real_escape_string($_REQUEST['contactos_ciudad']); 
  $_contactos_provincia = mysql_real_escape_string($_REQUEST['contactos_provincia']); 
  $_contactos_pais = mysql_real_escape_string($_REQUEST['contactos_pais']); 
  $_contactos_tel = mysql_real_escape_string($_REQUEST['contactos_tel']); 
  $_contactos_fax = mysql_real_escape_string($_REQUEST['contactos_fax']); 
  $_contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']); 
  $_contactos_notas = mysql_real_escape_string($_REQUEST['contactos_notas']); 
  $_contactos_tipo = mysql_real_escape_string($_REQUEST['contactos_tipo']); 
  $_contactos_fecha_registro = mysql_real_escape_string($_REQUEST['contactos_fecha_registro']); 
  $_contactos_es_contacto = mysql_real_escape_string($_REQUEST['contactos_es_contacto']); 
  $_contactos_estrellas = mysql_real_escape_string($_REQUEST['contactos_estrellas']); 
  $_contactos_estatus = mysql_real_escape_string($_REQUEST['contactos_estatus']); 
