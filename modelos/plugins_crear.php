<h3>Crear Pluging</h3>
<ul>
    <?php

// nombre plugin
    if (isset($_GET['nombrePlugin'])) {
        $nombrePlugin = trim(strtolower($_GET['nombrePlugin']));
        echo "<li> <span class=\"label label-info\">ok</span> Nombre de plugin: $nombrePlugin</li>";
        
    } else {
        $nombrePlugin = false;
        die("Olvido el nombre del plugin");
    }

// ubicacion
    if (isset($_GET['ubicacion'])) {
        $ubicacion = trim(strtolower($_GET['ubicacion']));
        echo "<li><span class=\"label label-info\">ok</span> Su ubicacion en el menu es: $ubicacion</li>";
    } else {
        $ubicacion = false;
        die("Olvido la ubicacion");
    }
// Padre
    if (isset($_GET['padre'])) {
        $padre = trim(strtolower($_GET['padre']));
        echo "<li><span class=\"label label-info\">ok</span> Nombre padre es: $padre</li>";
    } else {
        $menu = false;
        die("Olvido el nombre del menu");
    }
// Label
    if (isset($_GET['label'])) {
        $label = trim(strtolower($_GET['label']));
        echo "<li><span class=\"label label-info\">ok</span> Label de plugin: $label</li>";
    } else {
        $label = false;
        die("Olvido el nombre del menu");
    }

// verifica si el plugin existe o no    
    
    
    if (file_exists($path_plugins . '/' . $nombrePlugin)) {
        echo "<li><span class=\"label label-danger\">error</span> El plugin <b>$path_plugins/$nombrePlugin</b>  YA existe<li>";
        muestra_errores(__FiLE__, __FUNCTION__, __LINE__);
        $existe = true;
    } else {
        echo "<li><span class=\"label label-info\">ok</span> El plugin: <b>$nombrePlugin</b> no existe, puede continuar</li>";
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
        
        echo "<ul>"; 
        plugin_crear($path_plugins, $ubicacion, $nombrePlugin, $padre, $label);        
        echo "</ul>";
  
        
        
    }
    ?>
</ul>

<?php 
//include "vista/form_plugin_crear.php"; 
?>


<hr>