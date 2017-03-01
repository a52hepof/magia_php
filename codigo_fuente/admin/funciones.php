<?php

function magia_version(){
    return "0.0.7";
}

function _campo($tabla, $id, $campo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla WHERE id = '$id'   ", $conexion) or die("Error:" . mysql_error());
    $reg = mysql_fetch_array($sql);
    return $reg[$campo];
}

function _incluir_funciones() {
       
    $ruta = "../extenciones/funciones";

    $directorio = opendir($ruta); //ruta actual
        
    while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
        if (is_file($archivo)) {//verificamos si es o no un directorio
            //echo "[" . $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes    
            include "$ruta/$archivo";
         
        } 
    }
    
    
  
/*
    $ruta = "../extenciones/funciones";

    $funciones = _listar_directorios_ruta($ruta);
    foreach ($funciones as $fichero) {

        $f = "$ruta/$fichero.php";

        if (file_exists($f)) {
            include "$ruta/$fichero.php";
        }
    }
  */  
    
}

function _listar_directorios_ruta($ruta = "./") {
    // abrir un directorio y listarlo recursivo 
    if (is_dir($ruta)) {
        if ($dh = opendir($ruta)) {
            $carpetas = [];
            while (($file = readdir($dh)) !== false) {
                //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
                //mostraría tanto archivos como directorios 
                //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
                if (is_dir($ruta . $file) && $file != "." && $file != "..") {

                    //solo si el archivo es un directorio, distinto que "." y ".." 

                    $c = array_push($carpetas, $file);


                    //  echo "<br>Directorio: $ruta$file"; 
                    // _listar_directorios_ruta($ruta . $file . "/"); 
                }
            }
            closedir($dh);
        }
    } else {
        echo "<br>No es ruta valida";
    }
    return $c;
}

function _listar_ficheros_de_carpeta($ruta = '.') {
    $directorio = opendir($ruta); //ruta actual
    
    $ficheros = [] ;
    
    while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
        if (is_dir($archivo)) {//verificamos si es o no un directorio
            //echo "[" . $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes            
            $r = array_push($ficheros, $archivo);            
        } 
    }
    
    return $r;
}

function _magia_menu($selecionado) {
    $menu_items = _listar_directorios_ruta();
    $menu_total_items = count(_listar_directorios_ruta());
    $i = 0;
    while ($i < $menu_total_items) {

        $activa = ($selecionado == $menu_items[$i] ) ? 'active' : 0;
        if ($activa) {
            $clase = ' glyphicon glyphicon-folder-open ';
        } else {
            $clase = ' glyphicon glyphicon-folder-close ';
        }

        if ($menu_items[$i] != 'home') {
            echo '<li class="' . $activa . '"><a href="?p=' . $menu_items[$i] . '&c=index"> <span class="' . $clase . '"></span> ' . ucwords($menu_items[$i]) . '</a></li>';
        }
        $i++;
    }
}

function _estatus($estatus) {
    if ($estatus == 0) {
        return _t("Activo", "formularios");
    } else {
        return _t("Bloqueado", "formularios");
    }
}
