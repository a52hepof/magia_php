<ul>
    <?php

// nombre plugin
    if (isset($_GET['nombrePlugin'])) {
        $nombrePlugin = trim(strtolower($_GET['nombrePlugin']));
        echo "<li>ok: Nombre de plugin: $nombrePlugin</li>";
    } else {
        $nombrePlugin = false;
        die("Olvido el nombre del plugin");
    }


    
    
    if (file_exists($path_temas . '/' . $nombrePlugin)) {
        echo "El plugin <b>$path_temas/$nombrePlugin</b>  YA existe";
        muestra_errores(__FiLE__, __FUNCTION__, __LINE__);
        $existe = true;
    } else {
        echo "<li>ok: El plugin: $nombrePlugin no existe, puede continuar</li>";
        $existe = false;
    }


// fin de las verificaciones
// ahora proecemos a crear


    if ($existe == false) {        
        crear_base_tema($path_temas, $ubicacion, $nombrePlugin, $padre, $label);        
        
    }
    ?>
</ul>
<hr>