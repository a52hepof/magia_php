<?php

/**
  magia_version: 0.0.8
 * */
$datos = [
    "clientes" => ["id" => "$clientes_id",
        "clientes_idioma" => "$clientes_idioma",
        "tipo_documento" => "$clientes_tipo_documento",
        "ruc_prefijo" => "$clientes_ruc_prefijo",
        "numero_documento" => "$clientes_numero_documento",
        "empresa" => "$clientes_empresa",
        "cliente" => "$clientes_cliente",
        "saludo" => "$clientes_saludo",
        "direccion" => "$clientes_direccion",
        "cpostal" => "$clientes_cpostal",
        "ciudad" => "$clientes_ciudad",
        "provincia" => "$clientes_provincia",
        "pais" => "$clientes_pais",
        "tel" => "$clientes_tel",
        "fax" => "$clientes_fax",
        "email" => "$clientes_email",
        "notas" => "$clientes_notas",
        "tipo" => "$clientes_tipo",
        "fecha_registro" => "$clientes_fecha_registro",
        "es_cliente" => "$clientes_es_cliente",
        "estrellas" => "$clientes_estrellas",
        "estatus" => "$clientes_estatus",
    ]
];
$html = str_replace('%clientes_id%', $datos['clientes']['id'], $html);
$html = str_replace('%clientes_idioma%', $datos['clientes']['idioma'], $html);
$html = str_replace('%clientes_tipo_documento%', $datos['clientes']['tipo_documento'], $html);
$html = str_replace('%clientes_ruc_prefijo%', $datos['clientes']['ruc_prefijo'], $html);
$html = str_replace('%clientes_numero_documento%', $datos['clientes']['numero_documento'], $html);
$html = str_replace('%clientes_empresa%', $datos['clientes']['empresa'], $html);
$html = str_replace('%clientes_cliente%', $datos['clientes']['cliente'], $html);
$html = str_replace('%clientes_saludo%', $datos['clientes']['saludo'], $html);
$html = str_replace('%clientes_direccion%', $datos['clientes']['direccion'], $html);
$html = str_replace('%clientes_cpostal%', $datos['clientes']['cpostal'], $html);
$html = str_replace('%clientes_ciudad%', $datos['clientes']['ciudad'], $html);
$html = str_replace('%clientes_provincia%', $datos['clientes']['provincia'], $html);
$html = str_replace('%clientes_pais%', $datos['clientes']['pais'], $html);
$html = str_replace('%clientes_tel%', $datos['clientes']['tel'], $html);
$html = str_replace('%clientes_fax%', $datos['clientes']['fax'], $html);
$html = str_replace('%clientes_email%', $datos['clientes']['email'], $html);
$html = str_replace('%clientes_notas%', $datos['clientes']['notas'], $html);
$html = str_replace('%clientes_tipo%', $datos['clientes']['tipo'], $html);
$html = str_replace('%clientes_fecha_registro%', $datos['clientes']['fecha_registro'], $html);
$html = str_replace('%clientes_es_cliente%', $datos['clientes']['es_cliente'], $html);
$html = str_replace('%clientes_estrellas%', $datos['clientes']['estrellas'], $html);
$html = str_replace('%clientes_estatus%', $datos['clientes']['estatus'], $html);
