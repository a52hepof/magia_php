<?php

/**
  magia_version: 0.0.8
 * */
//$_contactos_id = mysql_real_escape_string(trim($_REQUEST['contactos_id'])); 
$_contactos_idioma = (isset($_REQUEST['contactos_idioma'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_idioma'])):'es_ES';
$_contactos_tipo_documento = (isset($_REQUEST['contactos_tipo_documento'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_tipo_documento'])):null;
$_contactos_ruc_prefijo = (isset($_REQUEST['contactos_ruc_prefijo'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_ruc_prefijo'])):null;
$_contactos_numero_documento = (isset($_REQUEST['contactos_numero_documento'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_numero_documento'])):null;
$_contactos_empresa = (isset($_REQUEST['contactos_empresa'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_empresa'])):"Company";
$_contactos_contacto = (isset($_REQUEST['contactos_contacto'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_contacto'])):null;
$_contactos_saludo = (isset($_REQUEST['contactos_saludo'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_saludo'])):null;
$_contactos_direccion = (isset($_REQUEST['contactos_direccion'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_direccion'])):null;
$_contactos_cpostal = (isset($_REQUEST['contactos_cpostal'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_cpostal'])):null;
$_contactos_ciudad = (isset($_REQUEST['contactos_ciudad'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_ciudad'])):null;
$_contactos_provincia = (isset($_REQUEST['contactos_provincia'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_provincia'])):null;
$_contactos_pais = (isset($_REQUEST['contactos_pais'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_pais'])):null;
$_contactos_tel = (isset($_REQUEST['contactos_tel'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_tel'])):null;
$_contactos_fax = (isset($_REQUEST['contactos_fax'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_fax'])):null;
$_contactos_email = (isset($_REQUEST['contactos_email'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_email'])):null;
$_contactos_notas = (isset($_REQUEST['contactos_notas'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_notas'])):null;
//$fecha_registro  = (isset($_REQUEST['fecha_registro '])) ? mysql_real_escape_string(trim($_REQUEST['fecha_registro '])):null;
$_contactos_tipo = (isset($_REQUEST['contactos_tipo'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_tipo'])):null;
$_contactos_es_contacto = (isset($_REQUEST['contactos_es_contacto'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_es_contacto'])):null;
$_contactos_estrellas = (isset($_REQUEST['contactos_estrellas'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_estrellas'])):null;
$_contactos_estatus = (isset($_REQUEST['contactos_estatus'])) ? mysql_real_escape_string(trim($_REQUEST['contactos_estatus'])):null;

