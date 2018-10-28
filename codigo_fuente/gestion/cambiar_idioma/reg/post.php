<?php

/**
  magia_version: 0.0.8
 * */
//$_contactos_id = mysql_real_escape_string(trim($_POST['contactos_id'])); 
$_contactos_idioma = (isset($_POST['contactos_idioma'])) ? mysql_real_escape_string(trim($_POST['contactos_idioma'])):'es_ES';
$_contactos_tipo_documento = (isset($_POST['contactos_tipo_documento'])) ? mysql_real_escape_string(trim($_POST['contactos_tipo_documento'])):null;
$_contactos_ruc_prefijo = (isset($_POST['contactos_ruc_prefijo'])) ? mysql_real_escape_string(trim($_POST['contactos_ruc_prefijo'])):null;
$_contactos_numero_documento = (isset($_POST['contactos_numero_documento'])) ? mysql_real_escape_string(trim($_POST['contactos_numero_documento'])):null;
$_contactos_empresa = (isset($_POST['contactos_empresa'])) ? mysql_real_escape_string(trim($_POST['contactos_empresa'])):"Company";
$_contactos_contacto = (isset($_POST['contactos_contacto'])) ? mysql_real_escape_string(trim($_POST['contactos_contacto'])):null;
$_contactos_saludo = (isset($_POST['contactos_saludo'])) ? mysql_real_escape_string(trim($_POST['contactos_saludo'])):null;
$_contactos_direccion = (isset($_POST['contactos_direccion'])) ? mysql_real_escape_string(trim($_POST['contactos_direccion'])):null;
$_contactos_cpostal = (isset($_POST['contactos_cpostal'])) ? mysql_real_escape_string(trim($_POST['contactos_cpostal'])):null;
$_contactos_ciudad = (isset($_POST['contactos_ciudad'])) ? mysql_real_escape_string(trim($_POST['contactos_ciudad'])):null;
$_contactos_provincia = (isset($_POST['contactos_provincia'])) ? mysql_real_escape_string(trim($_POST['contactos_provincia'])):null;
$_contactos_pais = (isset($_POST['contactos_pais'])) ? mysql_real_escape_string(trim($_POST['contactos_pais'])):null;
$_contactos_tel = (isset($_POST['contactos_tel'])) ? mysql_real_escape_string(trim($_POST['contactos_tel'])):null;
$_contactos_fax = (isset($_POST['contactos_fax'])) ? mysql_real_escape_string(trim($_POST['contactos_fax'])):null;
$_contactos_email = (isset($_POST['contactos_email'])) ? mysql_real_escape_string(trim($_POST['contactos_email'])):null;
$_contactos_notas = (isset($_POST['contactos_notas'])) ? mysql_real_escape_string(trim($_POST['contactos_notas'])):null;
//$fecha_registro  = (isset($_POST['fecha_registro '])) ? mysql_real_escape_string(trim($_POST['fecha_registro '])):null;
$_contactos_tipo = (isset($_POST['contactos_tipo'])) ? mysql_real_escape_string(trim($_POST['contactos_tipo'])):null;
$_contactos_es_contacto = (isset($_POST['contactos_es_contacto'])) ? mysql_real_escape_string(trim($_POST['contactos_es_contacto'])):null;
$_contactos_estrellas = (isset($_POST['contactos_estrellas'])) ? mysql_real_escape_string(trim($_POST['contactos_estrellas'])):null;
$_contactos_estatus = (isset($_POST['contactos_estatus'])) ? mysql_real_escape_string(trim($_POST['contactos_estatus'])):null;

