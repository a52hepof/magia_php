<?php

/**
  magia_version: 0.0.8
 * */
$datos = [
    "contactos" => ["id" => "$_contactos_id",
        "contactos_idioma" => "$_contactos_idioma",
        "tipo_documento" => "$_contactos_tipo_documento",
        "ruc_prefijo" => "$_contactos_ruc_prefijo",
        "numero_documento" => "$_contactos_numero_documento",
        "empresa" => "$_contactos_empresa",
        "contacto" => "$_contactos_contacto",
        "saludo" => "$_contactos_saludo",
        "direccion" => "$_contactos_direccion",
        "cpostal" => "$_contactos_cpostal",
        "ciudad" => "$_contactos_ciudad",
        "provincia" => "$_contactos_provincia",
        "pais" => "$_contactos_pais",
        "tel" => "$_contactos_tel",
        "fax" => "$_contactos_fax",
        "email" => "$_contactos_email",
        "notas" => "$_contactos_notas",
        "tipo" => "$_contactos_tipo",
        "fecha_registro" => "$_contactos_fecha_registro",
        "es_contacto" => "$_contactos_es_contacto",
        "estrellas" => "$_contactos_estrellas",
        "estatus" => "$_contactos_estatus",
    ]
];
$html = str_replace('%contactos_id%', $datos['contactos']['id'], $html);
$html = str_replace('%contactos_idioma%', $datos['contactos']['idioma'], $html);
$html = str_replace('%contactos_tipo_documento%', $datos['contactos']['tipo_documento'], $html);
$html = str_replace('%contactos_ruc_prefijo%', $datos['contactos']['ruc_prefijo'], $html);
$html = str_replace('%contactos_numero_documento%', $datos['contactos']['numero_documento'], $html);
$html = str_replace('%contactos_empresa%', $datos['contactos']['empresa'], $html);
$html = str_replace('%contactos_contacto%', $datos['contactos']['contacto'], $html);
$html = str_replace('%contactos_saludo%', $datos['contactos']['saludo'], $html);
$html = str_replace('%contactos_direccion%', $datos['contactos']['direccion'], $html);
$html = str_replace('%contactos_cpostal%', $datos['contactos']['cpostal'], $html);
$html = str_replace('%contactos_ciudad%', $datos['contactos']['ciudad'], $html);
$html = str_replace('%contactos_provincia%', $datos['contactos']['provincia'], $html);
$html = str_replace('%contactos_pais%', $datos['contactos']['pais'], $html);
$html = str_replace('%contactos_tel%', $datos['contactos']['tel'], $html);
$html = str_replace('%contactos_fax%', $datos['contactos']['fax'], $html);
$html = str_replace('%contactos_email%', $datos['contactos']['email'], $html);
$html = str_replace('%contactos_notas%', $datos['contactos']['notas'], $html);
$html = str_replace('%contactos_tipo%', $datos['contactos']['tipo'], $html);
$html = str_replace('%contactos_fecha_registro%', $datos['contactos']['fecha_registro'], $html);
$html = str_replace('%contactos_es_contacto%', $datos['contactos']['es_contacto'], $html);
$html = str_replace('%contactos_estrellas%', $datos['contactos']['estrellas'], $html);
$html = str_replace('%contactos_estatus%', $datos['contactos']['estatus'], $html);
