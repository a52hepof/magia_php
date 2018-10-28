<?php

/**
  magia_version: 0.0.11
 * */
$accion = "crear";
$pagina = "autos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'crear') {

        // verifica si hay un auto con la placa dada, si no hay lo registra sin mansa mensaje de error 

        include "./autos/reg/post.php";

        $autos_errores = array();

        if (!$autos_placa) {
            array_push($autos_errores, "Debe agregar un número de placa");
        }

        if (!$autos_id_contacto) {
            array_push($autos_errores, "Debe agregar un número contacto");
        }


        if ($autos_errores) {
            foreach ($autos_errores as $key => $value) {
                mensaje("error", $value);
            }

            die();
        } else {
            include "./autos/modelos/crear.php";
        }



        if (!$config_debug) {
            echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
        }
    } else {
        include "./autos/vista/crear.php";
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