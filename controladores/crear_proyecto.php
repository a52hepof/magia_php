<?php

//include "./modelos/crear_proyecto.php";

if( isset($_GET['a']) && $_GET['a'] == 'crear'){
    
    
    $nombreProyecto = ( ! $_GET['nombreProyecto'] )? "Mi super web" : $_GET['nombreProyecto'] ; 
    
    
    
    include "./vista/crear_proyecto.php";
}else{
    include "./vista/form_crear_proyecto.php";
}


