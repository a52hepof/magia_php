<?php

# Verifico el 
#   nombre del plugin
#   nombre de la pagina
#   menu
#       padre
#       label    
# Quito espacios inicio y fin 
# verifico que la pagina no exista
# Verifico que tenga permiso de escritura
#


$donde = array(
    "controlador",
    "modelos",
    "vista",
);

foreach ($donde as $carpeta_destino) {
    crear_fichero("$path_web/gestion/$nombrePlugin/$carpeta_destino", "$pagina.php", 'Esste es el contenido ');     
}

// registro la pagina
registrar_pagina_en_bd($nombrePlugin);

// usuarios y sus permisos por defecto
$usuarios = array(
    "root"=>"1111",
    "administradores"=>"1110",
    "invitados"=>"1000",
    "usuarios"=>"1110",
);

foreach ($usuarios as $usuario => $permiso) {
    registrar_permiso_pagina_grupo($usuario, "$nombrePlugin", $permiso);
}

// ahora el menu
registra_item_al_menu($nombrePlugin, $ubicacion, $padre, $label);


//include "./modelos/plugins_crear_pagina.php";
include "./vista/columnas_de_tabla.php";
