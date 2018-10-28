<?php

/**
  magia_version: 0.0.8
 * */
$_contactos_id = $_contactos['id'];
$_contactos_idioma = $_contactos['idioma'];
$_contactos_tipo_documento = $_contactos['tipo_documento'];
$_contactos_ruc_prefijo = $_contactos['ruc_prefijo'];
$_contactos_numero_documento = $_contactos['numero_documento'];
$_contactos_empresa = $_contactos['empresa'];
$_contactos_contacto = $_contactos['contacto'];
$_contactos_saludo = $_contactos['saludo'];
$_contactos_direccion = $_contactos['direccion'];
$_contactos_cpostal = $_contactos['cpostal'];
$_contactos_ciudad = $_contactos['ciudad'];
$_contactos_provincia = $_contactos['provincia'];
$_contactos_pais = $_contactos['pais'];
$_contactos_tel = $_contactos['tel'];
$_contactos_fax = $_contactos['fax'];
$_contactos_email = $_contactos['email'];
$_contactos_notas = $_contactos['notas'];
$_contactos_tipo = $_contactos['tipo'];
$_contactos_fecha_registro = $_contactos['fecha_registro'];
$_contactos_es_contacto = $_contactos['es_contacto'];
$_contactos_estrellas = $_contactos['estrellas'];
$_contactos_estatus = $_contactos['estatus'];

$_contactos_estatus_0 = "";
$_contactos_estatus_1 = "";

if ($_contactos_estatus == 0) {
    $_contactos_estatus_0 = " checked ";
    $_contactos_estatus_1 = "";
} else {
    $_contactos_estatus_0 = "";
    $_contactos_estatus_1 = "checked";
}  
