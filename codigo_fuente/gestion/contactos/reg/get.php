<?php

/**
  magia_version: 0.0.8
 * */
//$_contactos_id = mysql_real_escape_string(trim($_GET['contactos_id'])); 
$_contactos_idioma = (isset($_GET['contactos_idioma'])) ? mysql_real_escape_string(trim($_GET['contactos_idioma'])):'es_ES';
$_contactos_tipo_documento = (isset($_GET['contactos_tipo_documento'])) ? mysql_real_escape_string(trim($_GET['contactos_tipo_documento'])):null;
$_contactos_ruc_prefijo = (isset($_GET['contactos_ruc_prefijo'])) ? mysql_real_escape_string(trim($_GET['contactos_ruc_prefijo'])):null;
$_contactos_numero_documento = (isset($_GET['contactos_numero_documento'])) ? mysql_real_escape_string(trim($_GET['contactos_numero_documento'])):null;
$_contactos_empresa = (isset($_GET['contactos_empresa'])) ? mysql_real_escape_string(trim($_GET['contactos_empresa'])):"Company";
$_contactos_contacto = (isset($_GET['contactos_contacto'])) ? mysql_real_escape_string(trim($_GET['contactos_contacto'])):null;
$_contactos_saludo = (isset($_GET['contactos_saludo'])) ? mysql_real_escape_string(trim($_GET['contactos_saludo'])):null;
$_contactos_direccion = (isset($_GET['contactos_direccion'])) ? mysql_real_escape_string(trim($_GET['contactos_direccion'])):null;
$_contactos_cpostal = (isset($_GET['contactos_cpostal'])) ? mysql_real_escape_string(trim($_GET['contactos_cpostal'])):null;
$_contactos_ciudad = (isset($_GET['contactos_ciudad'])) ? mysql_real_escape_string(trim($_GET['contactos_ciudad'])):null;
$_contactos_provincia = (isset($_GET['contactos_provincia'])) ? mysql_real_escape_string(trim($_GET['contactos_provincia'])):null;
$_contactos_pais = (isset($_GET['contactos_pais'])) ? mysql_real_escape_string(trim($_GET['contactos_pais'])):null;
$_contactos_tel = (isset($_GET['contactos_tel'])) ? mysql_real_escape_string(trim($_GET['contactos_tel'])):null;
$_contactos_fax = (isset($_GET['contactos_fax'])) ? mysql_real_escape_string(trim($_GET['contactos_fax'])):null;
$_contactos_email = (isset($_GET['contactos_email'])) ? mysql_real_escape_string(trim($_GET['contactos_email'])):null;
$_contactos_notas = (isset($_GET['contactos_notas'])) ? mysql_real_escape_string(trim($_GET['contactos_notas'])):null;
//$fecha_registro  = (isset($_GET['fecha_registro '])) ? mysql_real_escape_string(trim($_GET['fecha_registro '])):null;
$_contactos_tipo = (isset($_GET['contactos_tipo'])) ? mysql_real_escape_string(trim($_GET['contactos_tipo'])):null;
$_contactos_es_contacto = (isset($_GET['contactos_es_contacto'])) ? mysql_real_escape_string(trim($_GET['contactos_es_contacto'])):null;
$_contactos_estrellas = (isset($_GET['contactos_estrellas'])) ? mysql_real_escape_string(trim($_GET['contactos_estrellas'])):null;
$_contactos_estatus = (isset($_GET['contactos_estatus'])) ? mysql_real_escape_string(trim($_GET['contactos_estatus'])):null;

