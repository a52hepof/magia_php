<?php

/**
  magia_version: 0.0.11
 * */
$accion = "crear";
$pagina = "reservaciones";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {
        include "./reservaciones/reg/post.php";
        include "./reservaciones/modelos/crear.php";
        if (!$config_debug) {
            echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
        }
    } else {
        mensaje('info', "Agregar un item en la agenda no esta permitido");
        mensaje('info', "Agregue via el sistema publico");
        //include "./reservaciones/vista/crear.php";
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
        "\$_REQUEST['a']" => "$_REQUEST[a]"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}