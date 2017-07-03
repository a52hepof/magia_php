<?php

/**
  magia_version: 0.0.8
 * */
//$clientes_id = mysql_real_escape_string(trim($_GET['clientes_id'])); 
$clientes_idioma = (isset($_GET['clientes_idioma'])) ? mysql_real_escape_string(trim($_GET['clientes_idioma'])):'es_ES';
$clientes_tipo_documento = (isset($_GET['clientes_tipo_documento'])) ? mysql_real_escape_string(trim($_GET['clientes_tipo_documento'])):null;
$clientes_ruc_prefijo = (isset($_GET['clientes_ruc_prefijo'])) ? mysql_real_escape_string(trim($_GET['clientes_ruc_prefijo'])):null;
$clientes_numero_documento = (isset($_GET['clientes_numero_documento'])) ? mysql_real_escape_string(trim($_GET['clientes_numero_documento'])):null;
$clientes_empresa = (isset($_GET['clientes_empresa'])) ? mysql_real_escape_string(trim($_GET['clientes_empresa'])):"Company";
$clientes_cliente = (isset($_GET['clientes_cliente'])) ? mysql_real_escape_string(trim($_GET['clientes_cliente'])):null;
$clientes_saludo = (isset($_GET['clientes_saludo'])) ? mysql_real_escape_string(trim($_GET['clientes_saludo'])):null;
$clientes_direccion = (isset($_GET['clientes_direccion'])) ? mysql_real_escape_string(trim($_GET['clientes_direccion'])):null;
$clientes_cpostal = (isset($_GET['clientes_cpostal'])) ? mysql_real_escape_string(trim($_GET['clientes_cpostal'])):null;
$clientes_ciudad = (isset($_GET['clientes_ciudad'])) ? mysql_real_escape_string(trim($_GET['clientes_ciudad'])):null;
$clientes_provincia = (isset($_GET['clientes_provincia'])) ? mysql_real_escape_string(trim($_GET['clientes_provincia'])):null;
$clientes_pais = (isset($_GET['clientes_pais'])) ? mysql_real_escape_string(trim($_GET['clientes_pais'])):null;
$clientes_tel = (isset($_GET['clientes_tel'])) ? mysql_real_escape_string(trim($_GET['clientes_tel'])):null;
$clientes_fax = (isset($_GET['clientes_fax'])) ? mysql_real_escape_string(trim($_GET['clientes_fax'])):null;
$clientes_email = (isset($_GET['clientes_email'])) ? mysql_real_escape_string(trim($_GET['clientes_email'])):null;
$clientes_notas = (isset($_GET['clientes_notas'])) ? mysql_real_escape_string(trim($_GET['clientes_notas'])):null;
//$fecha_registro  = (isset($_GET['fecha_registro '])) ? mysql_real_escape_string(trim($_GET['fecha_registro '])):null;
$clientes_tipo = (isset($_GET['clientes_tipo'])) ? mysql_real_escape_string(trim($_GET['clientes_tipo'])):null;
$clientes_es_cliente = (isset($_GET['clientes_es_cliente'])) ? mysql_real_escape_string(trim($_GET['clientes_es_cliente'])):null;
$clientes_estrellas = (isset($_GET['clientes_estrellas'])) ? mysql_real_escape_string(trim($_GET['clientes_estrellas'])):null;
$clientes_estatus = (isset($_GET['clientes_estatus'])) ? mysql_real_escape_string(trim($_GET['clientes_estatus'])):null;

