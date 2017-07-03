<?php

/**
  magia_version: 0.0.8
 * */
//$clientes_id = mysql_real_escape_string(trim($_POST['clientes_id'])); 
$clientes_idioma = (isset($_POST['clientes_idioma'])) ? mysql_real_escape_string(trim($_POST['clientes_idioma'])):'es_ES';
$clientes_tipo_documento = (isset($_POST['clientes_tipo_documento'])) ? mysql_real_escape_string(trim($_POST['clientes_tipo_documento'])):null;
$clientes_ruc_prefijo = (isset($_POST['clientes_ruc_prefijo'])) ? mysql_real_escape_string(trim($_POST['clientes_ruc_prefijo'])):null;
$clientes_numero_documento = (isset($_POST['clientes_numero_documento'])) ? mysql_real_escape_string(trim($_POST['clientes_numero_documento'])):null;
$clientes_empresa = (isset($_POST['clientes_empresa'])) ? mysql_real_escape_string(trim($_POST['clientes_empresa'])):"Company";
$clientes_cliente = (isset($_POST['clientes_cliente'])) ? mysql_real_escape_string(trim($_POST['clientes_cliente'])):null;
$clientes_saludo = (isset($_POST['clientes_saludo'])) ? mysql_real_escape_string(trim($_POST['clientes_saludo'])):null;
$clientes_direccion = (isset($_POST['clientes_direccion'])) ? mysql_real_escape_string(trim($_POST['clientes_direccion'])):null;
$clientes_cpostal = (isset($_POST['clientes_cpostal'])) ? mysql_real_escape_string(trim($_POST['clientes_cpostal'])):null;
$clientes_ciudad = (isset($_POST['clientes_ciudad'])) ? mysql_real_escape_string(trim($_POST['clientes_ciudad'])):null;
$clientes_provincia = (isset($_POST['clientes_provincia'])) ? mysql_real_escape_string(trim($_POST['clientes_provincia'])):null;
$clientes_pais = (isset($_POST['clientes_pais'])) ? mysql_real_escape_string(trim($_POST['clientes_pais'])):null;
$clientes_tel = (isset($_POST['clientes_tel'])) ? mysql_real_escape_string(trim($_POST['clientes_tel'])):null;
$clientes_fax = (isset($_POST['clientes_fax'])) ? mysql_real_escape_string(trim($_POST['clientes_fax'])):null;
$clientes_email = (isset($_POST['clientes_email'])) ? mysql_real_escape_string(trim($_POST['clientes_email'])):null;
$clientes_notas = (isset($_POST['clientes_notas'])) ? mysql_real_escape_string(trim($_POST['clientes_notas'])):null;
//$fecha_registro  = (isset($_POST['fecha_registro '])) ? mysql_real_escape_string(trim($_POST['fecha_registro '])):null;
$clientes_tipo = (isset($_POST['clientes_tipo'])) ? mysql_real_escape_string(trim($_POST['clientes_tipo'])):null;
$clientes_es_cliente = (isset($_POST['clientes_es_cliente'])) ? mysql_real_escape_string(trim($_POST['clientes_es_cliente'])):null;
$clientes_estrellas = (isset($_POST['clientes_estrellas'])) ? mysql_real_escape_string(trim($_POST['clientes_estrellas'])):null;
$clientes_estatus = (isset($_POST['clientes_estatus'])) ? mysql_real_escape_string(trim($_POST['clientes_estatus'])):null;

