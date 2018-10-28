<?php

/**
  magia_version: 0.0.11
 * */
$accion = "ver";
$pagina = "autos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? mysql_real_escape_string($_REQUEST['pag']) * $cfg_limite_items_en_tablas : 0;
    // ordenamos por id por defecto 
    $ordenpor = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? mysql_real_escape_string($_REQUEST['ordenpor']) : 'id';
    //asc / desc 
    $orden = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? mysql_real_escape_string($_REQUEST['orden']) : 'DESC';
    include "./autos/modelos/index.php";
    // esto es par el paginador     
    $total_items_por_pagina = $cfg_limite_items_en_tablas; // esto viene de la configuracion    
    $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);
    include "./autos/vista/index.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}

if ($config_debug) {
    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";

    $variables = array(
        "\$accion" => "$accion",
        "\$pagina" => "$pagina",
        "\$_usuarios_grupo" => "$_usuarios_grupo",
        "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)" => permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
        "\$cfg_limite_items_en_tablas" => "$cfg_limite_items_en_tablas",
        "\$inicia" => "$inicia",
        "\$_REQUEST['pag']" => "$_REQUEST[pag]",
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}