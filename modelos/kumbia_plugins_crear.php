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


    
    

    

    if (file_exists($path_plugins . '/' . $nombrePlugin . '_controller.php')) {
        echo "El fichero <b>$path_plugins/$nombrePlugin'_controller.php'</b>  YA existe";
        muestra_errores(__FiLE__, __FUNCTION__, __LINE__);
        $existe = true;
    } else {
        echo "<li>ok: El plugin: $nombrePlugin no existe, puede continuar</li>";
        $existe = false;
    }


// fin de las verificaciones
// ahora proecemos a crear


    if ($existe == false) {
        // creo el folder
// verificar que solo tenga letras de a-z en minusculas
// talvez guion bajo, medio, 
// de todas maneras el nombre debe ser identico a la tabla de la BD
// caso de no encontrar una conrrespondencia con una de las tablas de la BD
// igual creamos pero tendremos en cuanta para ya no llenar los controladores por defecto 
// talvez crear en un futuro paginas por deecto 

        $label = ($label)?"$label":"$nombrePlugin";
        
        plugin_crear($path_plugins, $ubicacion, $nombrePlugin, $padre, $label);        


  
        
        
    }
    ?>
</ul>
<hr>