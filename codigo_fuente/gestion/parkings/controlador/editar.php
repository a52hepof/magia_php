<?php

/**
  magia_version: 0.0.11
 * */
$accion = "editar";
$pagina = "parkings";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        $parkings_id = mysql_real_escape_string($_REQUEST['parkings_id']);
        
        include "./parkings/reg/post.php";
        include "./parkings/modelos/editar.php";

        include "./parkings/modelos/ver.php";
        include "./parkings/reg/reg.php";
        include "./parkings/vista/ver.php";
    } else {
        $parkings_id = mysql_real_escape_string($_REQUEST['parkings_id']);
        include "./parkings/modelos/ver.php";
        include "./parkings/reg/reg.php";
        include "./parkings/vista/editar.php";
    }
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
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "\$_REQUEST['a']" => "$_REQUEST[a]",
        "$parkings_id" => "$parkings_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}