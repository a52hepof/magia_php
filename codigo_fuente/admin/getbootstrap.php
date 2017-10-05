<?php

/**
 * 
 * @param type $seleccionado
 */
function bst_iconos_add($seleccionado = FALSE) {

    $lineas = file("../admin/bst_data.txt");
    foreach ($lineas as $num_línea => $línea) {
        $valor = trim(substr($línea, 11));
        echo '<option ';
        if ($seleccionado == $valor) {
            echo 'selected = "selected" ';
        }
        echo 'value="glyphicon glyphicon-' . $valor . '">' . substr($línea, 0, 10) . ' ' . $valor . '</option>';
    }
}
