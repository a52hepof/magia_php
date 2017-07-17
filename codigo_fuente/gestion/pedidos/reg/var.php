<?php

/**
  magia_version: 0.0.8
 * */
$datos = [
    "pedidos" => ["id" => "$pedidos_id",
        "ref" => "$pedidos_ref",
        "empresa" => "$pedidos_empresa",
        "contacto" => "$pedidos_contacto",
        "email" => "$pedidos_email",
        "descripcion" => "$pedidos_descripcion",
        "fecha" => "$pedidos_fecha",
        "notas" => "$pedidos_notas",
        "estatus" => "$pedidos_estatus",
    ]
];
$html = str_replace('%pedidos_id%', $datos['pedidos']['id'], $html);
$html = str_replace('%pedidos_ref%', $datos['pedidos']['ref'], $html);
$html = str_replace('%pedidos_empresa%', $datos['pedidos']['empresa'], $html);
$html = str_replace('%pedidos_contacto%', $datos['pedidos']['contacto'], $html);
$html = str_replace('%pedidos_email%', $datos['pedidos']['email'], $html);
$html = str_replace('%pedidos_descripcion%', $datos['pedidos']['descripcion'], $html);
$html = str_replace('%pedidos_fecha%', $datos['pedidos']['fecha'], $html);
$html = str_replace('%pedidos_notas%', $datos['pedidos']['notas'], $html);
$html = str_replace('%pedidos_estatus%', $datos['pedidos']['estatus'], $html);
