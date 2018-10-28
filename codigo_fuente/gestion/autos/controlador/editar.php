<?php

/**
  magia_version: 0.0.11
 * */
$accion = "editar";
$pagina = "autos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    if (isset($_REQUEST['a']) == 'editar') {
        
        $autos_id = mysql_real_escape_string($_REQUEST['autos_id']);
        include "./autos/reg/post.php";
        
        $autos_errores = array(); 
        
        // controlo si hay errores
        
        if(!$autos_placa){            
           // mensaje("error", "Debe escribir un número de placa"); 
            array_push($autos_errores, "Placa ya existe");            
        }                
        
        if(!$autos_id_contacto){            
            //mensaje("error", "Debe tener un numero de contacto"); 
            array_push($autos_errores, "Debe tener un id_contacto");            
        }        
        
        
        if(autos_busca_placa($autos_placa)){
            mensaje("error", "Placa ya existe"); 
            array_push($autos_errores, "Placa ya existe");   
        }
        
        if($autos_errores){
            foreach ($autos_errores as $key => $value) {
                echo mensaje("error", $value);                
            }
        }else{
            include "./autos/modelos/editar.php";
        }
        
        


        include "./autos/modelos/ver.php";
        include "./autos/reg/reg.php";
        include "./autos/vista/ver.php";
    } else {
        $autos_id = mysql_real_escape_string($_REQUEST['autos_id']);
        include "./autos/modelos/ver.php";
        include "./autos/reg/reg.php";
        include "./autos/vista/editar.php";
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
        "$autos_id" => "$autos_id"
    );
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }
    echo "</table>";
}