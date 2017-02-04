<?php

$icon_ok = '<span class="glyphicon glyphicon-ok"></span>';
$icon_error = '<span class="glyphicon glyphicon-remove"></span>';
$icon_carpeta_cerrada = '<span class="glyphicon glyphicon-folder-close"></span>';
$icon_carpeta_abierta = '<span class="glyphicon glyphicon-folder-open"></span>';
$icon_fichero = '<span class="glyphicon glyphicon-file"></span>';
$icon_fichero_copiar = '<span class="glyphicon glyphicon-copy"></span>';

/**
 * Muestra los errores mas detalladamente
 * @param type $documento
 * @param type $funcion
 * @param type $linea
 */
function muestra_errores($documento, $funcion, $linea) {
    echo "<pre>";
    echo "Documento: $documento <br>";
    echo "Funcion: $funcion <br>";
    echo "Linea: $linea <br>";
    echo "</pre>";
}

/**
 * Extrae el largo del campo de una tabla
 * @param type $campo
 * @return type
 */
function largo_del_campo($campo) {
    // http://www.bufa.es/extraer-numeros-cadena/
    $resultado = intval(preg_replace('/[^0-9]+/', '', $campo), 10);

    return $resultado;
}

function tipo_campo($tipo) {
    if (strpos($tipo, 'varchar') !== FALSE) {
        return "texto";
    }
    if (strpos($tipo, 'date') !== FALSE) {
        return "fecha";
    }
    if (strpos($tipo, 'timestamp') !== FALSE) {
        return "fecha";
    }
    if (strpos($tipo, 'enum') !== FALSE) {
        return "opciones";
    }
    if (strpos($tipo, 'time') !== FALSE) {
        return "hora";
    }
        if (strpos($tipo, 'text') !== FALSE) {
        return "areaDeTexto";
    }
        // int(11)     
    // si en tipo encuentro la cadena int es un numerico     
    if (strpos($tipo, 'int') !== FALSE) {
        if (largo_del_campo($tipo) > 1) {
            return "numerico";
        } else {
            return "buleano";
        }
    }
    return "texto";
}

function campo_html_texto($nombre, $id, $placeholder, $label, $contexto, $valor = "", $extras = "") {

    $html = ' <div class="form-group"> ' . "\n";
    $html .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($label))) . '"); ?></label> ' . "\n";
    $html .= '     <div class="col-sm-10"> ' . "\n";
    $html .= '       <input type="text" '
            . 'class="form-control" '
            . 'name="' . $nombre . '" '
            . 'id="' . $id . '" '
            . 'placeholder="<?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($placeholder))) . '"); ?>" '
            . 'value="' . $valor . '" '
            . ' ' . $extras . ' > ' . "\n";
    $html .= '     </div> ' . "\n";
    $html .= '   </div> ' . "\n\n\n";

    return $html;
}

function campo_html_fecha($nombre, $id, $placeholder, $label, $contexto, $valor = "", $extras = "") {

    $html = '   <script>
            $( function() {
              $( "#' . $id . '" ).datepicker();
            } );
            </script>' . "\n";
    
    $html .= ' <div class="form-group"> ' . "\n";
    $html .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($label))) . '"); ?></label> ' . "\n";
    $html .= '     <div class="col-sm-3"> ' . "\n";
    $html .= '     <div class="input-group"> ' . "\n";
    $html .= '       <input type="text" '
            . 'class="form-control" '
            . 'name="' . $nombre . '" '
            . 'id="' . $id . '" '
            . 'placeholder="<?php _t("aaaa-mm-dd"); ?>" '
            . 'value="' . $valor . '" '
            . ' ' . $extras . ' > ' . "\n";
    $html .= '     <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div> ' . "\n";
    $html .= '     </div> ' . "\n";
    $html .= '     </div> ' . "\n";
    $html .= '   </div> ' . "\n\n\n";

    return $html;
}

function campo_html_hora($nombre, $id, $placeholder, $label, $contexto, $valor = "", $extras = "") {

    $html = ' <div class="form-group"> ' . "\n";
    $html .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($label))) . '"); ?></label> ' . "\n";
    $html .= '     <div class="col-sm-10"> ' . "\n";
    $html .= '       <input type="time" '
            . 'class="form-control" '
            . 'name="' . $nombre . '" '
            . 'id="' . $id . '" '
            . 'placeholder="<?php _t("' . ucfirst($placeholder) . '"); ?>" '
            . 'value="' . $valor . '" '
            . ' ' . $extras . ' > ' . "\n";
    $html .= '     </div> ' . "\n";
    $html .= '   </div> ' . "\n\n\n";

    return $html;
}

function campo_html_areaDeTexto($nombre, $id, $placeholder, $label, $contexto, $valor = "", $extras = "") {
    $fuente = ' <div class="form-group"> ' . "\n";
    $fuente .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($label))) . '"); ?></label> ' . "\n";
    $fuente .= '     <div class="col-sm-10"> ' . "\n";
    $fuente .= '       <textarea ' . $extras . ' class="form-control" name="' . $nombre . '" id="' . $id . '" placeholder="<?php _t("' . ucfirst($placeholder) . '"); ?>">' . $valor . '</textarea> ' . "\n";
    $fuente .= '     </div> ' . "\n";
    $fuente .= '   </div> ' . "\n\n\n";

    return $fuente;
}

function campo_html_numerico($nombre, $id, $placeholder, $label, $contexto, $valor = "", $extras = "") {

    $html = ' <div class="form-group"> ' . "\n";
    $html .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_tiene_id_al_inicio($label))) . '"); ?></label> ' . "\n";
    $html .= '     <div class="col-sm-10"> ' . "\n";
    $html .= '       <input type="number" '
            . 'class="form-control" '
            . 'name="' . $nombre . '" '
            . 'id="' . $id . '" '
            . 'placeholder="<?php _t("' . ucfirst(bdd_tiene_id_al_inicio($placeholder)) . '"); ?>" '
            . 'value="' . $valor . '" '
            . ' ' . $extras . ' > ' . "\n";
    $html .= '     </div> ' . "\n";
    $html .= '   </div> ' . "\n\n\n";

    return $html;
}

function campo_html_buleano($nombre, $id, $label, $contexto, $selecionado = false, $extras = "") {

    $seleccionado_0 = ($selecionado == false) ? " checked " : " ";
    $seleccionado_1 = ($selecionado == true) ? " checked " : " ";
    
    // con esto veo cual es el nombre de la tabla y segun eso le asigno un valor 
    // label al radio
    switch ($label) {
        case 'sexo':
            $activo = 'Hombre'; 
            $bloqueado = 'Mujer'; 
            break;
        case 'estatus':
            $activo = 'Activo'; 
            $bloqueado = 'Bloqueado'; 
            break;

        default:
            $activo = 'Activo'; 
            $bloqueado = 'Bloqueado';             
            break;
    }

    $fuente = ' <div class="form-group"> ' . "\n";
    $fuente .= '     <label for="' . $id . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones($label)) . '"); ?></label> ' . "\n";
    $fuente .= '     <div class="col-sm-10"> ' . "\n";
    $fuente .= '     <div class="radio">' . "\n";
    $fuente .= '        <label>' . "\n";
    $fuente .= '            <input ' . $extras . ' type="radio" name="' . $nombre . '" value="1" <?php echo "$' . $nombre . '_1"; ?>  >' . "\n";
    $fuente .= '            <?php _t("'.$activo.'"); ?> ' . "\n";
    $fuente .= '        </label>' . "\n";
    $fuente .= '     </div>' . "\n";

    $fuente .= '     <div class="radio">' . "\n";
    $fuente .= '        <label>' . "\n";
    $fuente .= '            <input ' . $extras . ' type="radio" name="' . $nombre . '" value="0"  <?php echo "$' . $nombre . '_0"; ?>  >' . "\n";
    $fuente .= '            <?php _t("'.$bloqueado.'"); ?>  ' . "\n";
    $fuente .= '        </label>' . "\n";
    $fuente .= '     </div>' . "\n";
    $fuente .= '   </div> ' . "\n";
    $fuente .= '   </div> ' . "\n\n\n";

    return $fuente;
}

function campo_html_opciones($nombre, $id, $label, $tabla, $extras = "") {    
    // si el nombre del campo tiene 'id_' debemos buscar la tabla relacinada para ponerle un select con 
    // la tabla relacionada
    
    // verifico si tiene 'id_' al inicio 
    if(bdd_tiene_id_al_inicio($label)){
        // quito el 'id_' del inicio 
        $nombre_sin_id = bdd_quita_id_inicio($label);
        
        $lista = bdd_lista_tablas_bdd();
        
        $select = bdd_busca_tabla_con_nombre_igual_o_parecido($nombre_sin_id, $lista);
        
    }else{
        $select = "$nombre";
    }
    
    
    
    
    $fuente = ' <div class="form-group"> ' . "\n";
    $fuente .= '     <label for="' . $nombre . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($label))) . '"); ?></label> ' . "\n";
    $fuente .= '     <div class="col-sm-10"> ' . "\n";
    $fuente .= '        <select class="form-control" name="' . $nombre . '" '.$extras.'>' . "\n";
    $fuente .= '        <?php '.$select.'_add($'.$nombre.'); ?>' . "\n";
    $fuente .= '        </select>' . "\n";
    $fuente .= '     </div> ' . "\n";
    $fuente .= '   </div> ' . "\n\n\n";


    return $fuente;
}

function plugin_crear($path_plugins, $ubicacion, $nombrePlugin, $padre, $label) {
    global $path_web;
    // verifico si el nombre existe
    // verifico que la carpeta de plugins existe $path_plugins 


    if ($nombrePlugin) {

        echo "<h3>1020 Dentro de plugin crear: <br>$path_plugins</h3>";


        $mvc = ['controlador', 'modelos', 'scripts',  'reg', 'vista', 'raiz'];

        $t = count($mvc); // cuenta las carpetas        
        crear_carpeta("$path_plugins", "$nombrePlugin");                        
        $contenido = contenido_extenciones_funciones($nombrePlugin);        
        crear_fichero("$path_web/extenciones/funciones", "$nombrePlugin.php",$contenido);

// si la carpeta existe, registro el nombre del plugin en la base de datos como una pagina
        registrar_pagina_en_bd($nombrePlugin);

// tambien registro el item en el menu    
        registra_item_al_menu($nombrePlugin, $ubicacion, $padre, $label);

// ahora registro el permiso del root en 1111
        registrar_permiso_pagina_grupo('administradores', "$nombrePlugin", '1110');
        registrar_permiso_pagina_grupo('invitados', "$nombrePlugin", '1000');
        registrar_permiso_pagina_grupo('root', "$nombrePlugin", '1111');
        registrar_permiso_pagina_grupo('usuarios', "$nombrePlugin", '1110');

        // registro el permiso de invitados, 
        


        // ahora hago una repeticion creando a cada vuelta las carpetas dentro del plugin
        $i = 0; // pongo 1 para no crear elfichero raiz
        while ($i < $t) {
            if ($mvc[$i] != 'raiz') { // la ultima no la creo (raiz)
                crear_carpeta("$path_plugins/$nombrePlugin", $mvc[$i]);
                crear_carpeta("$path_plugins/$nombrePlugin/$mvc[$i]", 'publico');
            }
            // dentro de cada carpeta creo los ficheros que cada carpeta debe contenir
            magia_crear_ficheros_dentro_mvc($nombrePlugin, $mvc[$i]);
            $i++;
        }
    }
}

function menu_add_plugin() {
    global $dbh;
    $sql = "SELECT padre,label FROM _menu where padre like '' group by padre  order by label ";

    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
            // ":id_personal"=>"$u_id_personal"
            )
    );
    $resultado = $stmt->fetchAll();


    $i = 1;
    foreach ($resultado as $reg) {
        echo '<option value="' . $reg['label'] . '" >' . strtoupper($reg['label']) . ' </option>' . "\n";
        menu_add_plugin_segun_padre($reg['padre']);


        $i++;
    }
}

function menu_add_plugin_segun_padre($padre) {
    global $dbh;
    $sql = "SELECT * FROM _menu where padre like '$padre'  order by label ";

    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
        ":padre" => "$padre"
            )
    );
    $resultado = $stmt->fetchAll();

    $i = 1;
    foreach ($resultado as $reg) {
        echo '<option value="' . $reg['label'] . '" disabled> ->' . $reg['label'] . ' </option>' . "\n";
        $i++;
    }
}

/**
 * Crea las carpetas de una lista de nombres que se le pase
 * @global string $icon_error
 * @global string $icon_ok
 * @global string $icon_carpeta_cerrada
 * @global string $icon_carpeta_abierta
 * @param type $path Donde se creara la carpeta
 * @param type $nombre_carpeta La carpeta a ser creada
 * @return int
 */
function crear_carpeta($path, $nombre_carpeta) {
    global $icon_error, $icon_ok, $icon_carpeta_cerrada, $icon_carpeta_abierta;

    if (file_exists("$path/$nombre_carpeta")) {
        echo "<p><b>$icon_error [error]</b> La carpeta $path/<b>$nombre_carpeta</b>, existe o no tiene derechos de escritura</p>";
    } else {
        mkdir("$path/$nombre_carpeta", 0777);
        chmod("$path/$nombre_carpeta", 0777);
        echo "<p><b>$icon_carpeta_abierta</b>: $path/<b>$nombre_carpeta</b>, creada con exito</p>";
    }


    return 0;
}

/**
 * Se le pasa uno o varios nombres y crea carpetas en el path que se le diga
 * @param type $path
 * @param type $carpetas
 */
function crear_carpetas($path, $carpetas) {
    $i = 0;
    while ($i < count($carpetas)) {
        crear_carpeta($path, $carpetas[$i]);
        $i++;
    }
}

/**
 * 
 * @global string $icon_error
 * @global string $icon_ok
 * @global string $icon_fichero
 * @param type $path
 * @param type $fichero
 * @param type $contenido
 * @return int
 */
function crear_fichero($path, $fichero, $contenido = '') {
    global $icon_error, $icon_ok, $icon_fichero;
    $contiene = ($contenido) ? $contenido : '';

    if (file_exists("$path/$fichero")) {
        echo "<p><b>$icon_error [error]</b> El fichero $path/<b>$fichero</b> Ya existe</p>";
        return 1;
    } else {
        echo "<p>---$icon_fichero $fichero creado con exito</p>";
        $fp = fopen("$path/$fichero", 'w+');
        fwrite($fp, $contiene);
        fclose($fp);
        chmod("$path/$fichero", 0777);
        return 0;
    }
}

function copiar_carpeta($origen, $destino) {
    global $icon_error, $icon_ok, $icon_fichero;
    echo "<p><b>Copiar:</b> $origen <b>a:</b> $destino</p>";

    if (is_dir($origen)) {
        @mkdir($destino);
        $d = dir($origen);
        while (FALSE !== ( $entry = $d->read() )) {
            if ($entry == '.' || $entry == '..') {
                continue;
            }
            $Entry = $origen . '/' . $entry;
            if (is_dir($Entry)) {

                if (!file_exists($destino . '/' . $entry)) {
                    copiar_carpeta($Entry, $destino . '/' . $entry);
                } else {
                    echo "<p><b>$icon_error [error]</b> : ya existe: $destino/$entry </p>";
                }



                continue;
            }
            if (!file_exists($destino . '/' . $entry)) {
                copy($Entry, $destino . '/' . $entry);
                chmod("$destino", 0777);
            } else {
                echo "<p><b>$icon_error [error]</b>  Ya existe: $destino/$entry)</p>";
            }
        }

        $d->close();
    } else {
        copy($origen, $destino);
        chmod("$destino", 0777);
    }
}

function contenido_controlador($controlador, $nombrePlugin) {
    global $path_plugins, $dbh;
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);

    switch ($controlador) {

        case 'borrar.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "borrar"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            $fuente .= ' if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { ' . "\n";
            $fuente .= ' $' . $nombrePlugin . '_id 		= mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']); ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/modelos/borrar.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";

            return $fuente;
            break;

        case 'buscar.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "buscar"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { ' . "\n";

/*

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    $fuente .= ' $' . $var2 . ' = mysql_real_escape_string($_REQUEST[\'' . $var2 . '\']);' . "\n";
                    $fuente .= ($i < $total_resultados - 1) ? " " : "";
                }
                $i++;
            }
*/


            $fuente .= '     include "./' . $nombrePlugin . '/modelos/buscar.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/vista/buscar.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";


            return $fuente;
            break;

        case 'crear.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "crear"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            // $fuente .= ' //include \'header.php\';  '."\n";
            // $fuente .= ' include "./'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { ' . "\n";
            $fuente .= ' if(isset($_REQUEST[\'a\'])==\'crear\'){ ' . "\n";

            $fuente .= ' include "./' . $nombrePlugin . '/reg/post.php";  ' . "\n";
            /*
              $i = 0;
              $usar_id = 0; // 0 no usa, -1 si usa
              foreach ($resultados as $reg) {
              if ($i > $usar_id) {
              //$fuente .= ' $'.$reg[0].' = $_REQUEST[\''.$reg[0].'\'];     '."\n";
              $fuente .= ' $' . $reg[0] . ' = mysql_real_escape_string($_REQUEST[\'' . $reg[0] . '\']);     ' . "\n";
              $fuente .= ($i < $total_resultados - 1) ? " " : "";
              }
              $i++;
              }
             * 
             */
            $fuente .= ' include "./' . $nombrePlugin . '/modelos/crear.php";  ' . "\n";

            $fuente .= ' include "./' . $nombrePlugin . '/modelos/index.php";  ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/vista/index.php";  ' . "\n";
            $fuente .= ' }else{ ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/vista/crear.php";  ' . "\n";
            $fuente .= ' }          ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";


            return $fuente;
            break;

        case 'editar.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "editar"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { ' . "\n";
            $fuente .= ' if(isset($_REQUEST[\'a\'])==\'editar\'){ ' . "\n";
            
            $fuente .= ' $' . $nombrePlugin . '_id = mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']);      ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/reg/post.php";  ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/modelos/editar.php";  ' . "\n\n";

            $fuente .= ' include "./' . $nombrePlugin . '/modelos/ver.php";  ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/vista/ver.php";  ' . "\n";
            $fuente .= ' }else{ ' . "\n";
            $fuente .= ' $' . $nombrePlugin . '_id = mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']);      ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/modelos/ver.php"; ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= ' include "./' . $nombrePlugin . '/vista/editar.php"; ' . "\n";
            $fuente .= ' }  ' . "\n";

            $fuente .= ' } else { ' . "\n";
            $fuente .= ' permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";

            return $fuente;

            break;



        case 'index.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "ver"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { ' . "\n";            
            $fuente .= '  $inicia = (isset($_REQUEST[\'pag\']) && $_REQUEST[\'pag\'] != 0 ) ? $_REQUEST[\'pag\'] * $cfg_limite_items_en_tablas : 0;    ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/modelos/index.php"; ' . "\n";
//            $fuente .= ' // esto es par el paginador     ' . "\n";
//            $fuente .= ' $total_items_por_pagina = $config_total_items_por_pagina; // esto viene de la configuracion    ' . "\n";
//            $fuente .= ' $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);    ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/vista/index.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";
            return $fuente;

        case 'data.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "ver"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            //     $fuente .= ' include \'header.php\';  '."\n";
            //     $fuente .= ' include "./'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { ' . "\n";

            $fuente .= '     $' . $nombrePlugin . '_id 		= mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']);   ' . "\n";

            $fuente .= '     include "./' . $nombrePlugin . '/modelos/ver.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/vista/data.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";
            return $fuente;
            break;
        case 'ver.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "ver"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            //     $fuente .= ' include \'header.php\';  '."\n";
            //     $fuente .= ' include "./'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { ' . "\n";

            $fuente .= '     $' . $nombrePlugin . '_id 		= mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']);   ' . "\n";

            $fuente .= '     include "./' . $nombrePlugin . '/modelos/ver.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/vista/ver.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";
            return $fuente;
            break;
        

        case 'txt.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $accion = "ver"; ' . "\n";
            $fuente .= ' $pagina = "' . $nombrePlugin . '"; ' . "\n";
            //     $fuente .= ' include \'header.php\';  '."\n";
            //     $fuente .= ' include "./'.$nombrePlugin.'/funciones.php"; '."\n";
            $fuente .= ' if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { ' . "\n";

            $fuente .= '     $' . $nombrePlugin . '_id 		= mysql_real_escape_string($_REQUEST[\'' . $nombrePlugin . '_id\']);   ' . "\n";

            $fuente .= '     include "./' . $nombrePlugin . '/modelos/ver.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/reg/reg.php"; ' . "\n";
            $fuente .= '     include "./' . $nombrePlugin . '/vista/txt.php"; ' . "\n";
            $fuente .= ' } else { ' . "\n";
            $fuente .= '     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); ' . "\n";
            $fuente .= ' } ' . "\n";
            return $fuente;
            break;
        default:
            $fuente = "";
            return $fuente;
            break;
    }
}

function contenido_modelos($modelos, $nombrePlugin) {
    global $path_plugins, $dbh;
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($modelos) {
        case 'borrar.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $sql=mysql_query(" ' . "\n";
            $fuente .= ' DELETE FROM  ' . "\n";
            $fuente .= ' ' . $nombrePlugin . '  ' . "\n";
            $fuente .= ' WHERE id = \'$' . $nombrePlugin . '_id\' ' . "\n";
            $fuente .= ' ",$conexion) or die ("Error ".mysql_error()); ' . "\n";
            $fuente .= '  ' . "\n";
            $fuente .= ' $mensaje = "Realizado"; ' . "\n";
            return $fuente;
            break;

        case 'buscar.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $sql=mysql_query( ' . "\n";
            $fuente .= '         "SELECT *  ' . "\n";
            $fuente .= ' FROM ' . $nombrePlugin . '  ' . "\n";
            $fuente .= ' WHERE  ' . "\n";




            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    // esto es para correjir el error
                    $remplaza_busqueda = '$busqueda';

                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";


                    //$fuente .= " $reg[0] like '%$remplaza_busqueda%'    "."\n";
                    $fuente .= " $var1 like '%$$var2%'    " . "\n";
                    $fuente .= ($i < $total_resultados - 1) ? " AND " : "";
                }
                $i++;
            }

            $fuente .= ' ORDER BY id DESC    ' . "\n";
            $fuente .= ' ",$conexion) or die ("Error:".mysql_error());  ' . "\n";
            //$fuente .=  ' $reg = mysql_fetch_array($sql);	  '."\n";          
            return $fuente;
            break;

        case 'crear.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= ' $sql = "INSERT INTO ' . $nombrePlugin . ' ( ' . "\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $fuente .= ' ' . $reg[0] . ' ';
                    $fuente .= ($i < $total_resultados - 1) ? " , " : "";
                }
                $i++;
            }


            $fuente .= ' ) VALUES ( ' . "\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $fuente .= ' :' . $reg[0] . ' ';
                    $fuente .= ($i < $total_resultados - 1) ? " , " : "   )\";  " . "\n";
                }
                $i++;
            }
            $fuente .= ' $stmt = $dbh->prepare($sql); ' . "\n";
            $fuente .= ' $stmt->execute(array( ' . "\n";
            $i = 0;
            $usar_id = 0; // 0 no usa el id, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {

                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";


                    $fuente .= ' ":' . $reg[0] . '"=>"$' . $var2 . '" ' . "";
                    $fuente .= ($i < $total_resultados - 1) ? " , " : "";
                }
                $i++;
            }
            $fuente .= '             ) ' . "\n";
            $fuente .= ' ); ' . "\n";
            $fuente .= ' $mensaje = "Realizado con exito"; ' . "\n";
            return $fuente;
            break;

        case 'editar.php':
            $fuente = ' <?php  ' . "\n";
            $fuente .= ' $sql=mysql_query(" UPDATE ' . $nombrePlugin . ' SET  ' . "\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";

                    $fuente .= ' ' . $reg[0] . ' = \'$' . $var2 . '\'  ' . "\n";
                    $fuente .= ($i < $total_resultados - 1) ? " , " : "";
                }
                $i++;
            }
            $fuente .= ' WHERE id = \'$' . $nombrePlugin . '_id\' ",$conexion) or die ("Error: ".mysql_error());   ' . "\n";
            return $fuente;
            break;

        case 'index.php':
            $fuente = '<?php ' . "\n";
            $fuente .= '$comando = "SELECT * FROM ' . $nombrePlugin . ' ORDER BY id DESC  "; ' . "\n";
            $fuente .= '$sql=mysql_query("$comando Limit $inicia, $cfg_limite_items_en_tablas ",$conexion) ' . "\n";
            $fuente .= 'or die ("Error: en el fichero:" .__FILE__ .\' linea: \'. __LINE__ .\'  \'.mysql_error());	  ' . "\n";
            $fuente .= '// esto es para la paginacion	  ' . "\n";
            $fuente .= '$total_items = mysql_num_rows(mysql_query("$comando ",$conexion));	  ' . "\n";



            return $fuente;
            break;

        case 'ver.php':
            $fuente = ' <?php ' . "\n";
            $fuente .= '$sql=mysql_query( ' . "\n";
            $fuente .= ' "SELECT * FROM ' . $nombrePlugin . ' WHERE id = \'$' . $nombrePlugin . '_id\' ORDER BY id DESC   ",$conexion) 	  ' . "\n";
            $fuente .= ' or die ("Error: en el fichero:" .__FILE__ .\' linea: \'. __LINE__ .\' / \'.mysql_error());	' . "\n";
            $fuente .= ' $' . $nombrePlugin . ' = mysql_fetch_array($sql);	  ' . "\n";
            return $fuente;
            break;

        default:
            $fuente = "";
            return $fuente;
            break;
    }
}

function contenido_vista($vista, $nombrePlugin) {
    global $path_plugins, $dbh;
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($vista) {
        case 'borrar.php':
            $fuente = '<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=' . $nombrePlugin . '&c=borrar&' . $nombrePlugin . '_id=<?php echo $' . $nombrePlugin . '_id; ?>"><?php _t("Si,borrar"); ?></a>';

            return $fuente;
            break;

        case 'buscar.php':
            $fuente = '<?php include "tabs.php"; ?>' . "\n\n";
            $fuente .= '<h2> ' . "\n\n";
            $fuente .= '<span class="glyphicon glyphicon-search"></span> ' . "\n\n";
            $fuente .= '<?php _t("Resultados de su busqueda en "); ?></h2>' . "\n\n";
            $fuente .= '
<table class="table table-striped">
    <thead>
        <tr> ' . "\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $fuente .= '<th><?php _t("' . ucfirst(bdd_quita_id_inicio($reg[0])) . '"); ?></th> ' . "\n";
                }
                $i++;
            }
            $fuente .= ' <th><?php _t("Accion"); ?></th> ' . "\n";
            $fuente .= ' </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "' . $nombrePlugin . '", $_usuarios_grupo)){
             //   include "./' . $nombrePlugin . '/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($' . $nombrePlugin . ' = mysql_fetch_array($sql)) {
            include "./' . $nombrePlugin . '/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "' . $nombrePlugin . '", $_usuarios_grupo)){
                    include "./' . $nombrePlugin . '/vista/tr.php";
                   // include "./' . $nombrePlugin . '/vista/tr_editar.php";
                }else{
                    include "./' . $nombrePlugin . '/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "' . $nombrePlugin . '", $_usuarios_grupo)){
             //   include "./' . $nombrePlugin . '/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


';

            return $fuente;
            break;

        case 'xxxxcrear.php':
            $f = '<h2><?php _t("Nuevo ' . $nombrePlugin . '"); ?></h2> ' . "\n\n";
            $f .= '<form class="form-horizontal" action="index.php" method="post"> ' . "\n";
            $f .= '<input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $f .= '<input type="hidden" name="c" value="crear"> ' . "\n";
            $f .= '<input type="hidden" name="a" value="crear"> ' . "\n\n";
            $f .= '<?php
                        $c = [ ' . "\n\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {

                    $nombre = $reg['Field'];
                    $tipo = $reg['Type'];
                    $nul = $reg['Null'];
                    $clave = $reg['Key'];
                    $defecto = $reg['Default'];
                    $extra = $reg['Extra'];


                    $tabla_nombre = "$nombrePlugin" . "_" . "$nombre";

                    $tipo_campo = tipo_campo($tipo);



                    $f .= ' [ ' . "\n";
                    $f .= '        "tipo" => "' . $tipo_campo . '", ' . "\n";
                    $f .= '        "nombre" => "' . $tabla_nombre . '",' . "\n";
                    $f .= '        "valor" => "",' . "\n";
                    $f .= '        "clase" => "form-control",' . "\n";
                    $f .= '        "id" => "' . $tabla_nombre . '",' . "\n";
                    $f .= '        "placeholder" => "' . ucfirst($reg[0]) . '",' . "\n";
                    $f .= '        "label" => "' . ucfirst($reg[0]) . '",' . "\n";
                    $f .= '        "desactivado" => "no",' . "\n";
                    $f .= '    ], ' . "\n";
                }
                $i++;
            }

            $f .= '        
                    ];
                    ?>   ' . "\n";


            $f .= ' <?php
                    for ($i = 0; $i < count($c); $i++) {

                        $tipo = $c[$i][\'tipo\'];
                        $nombre = $c[$i][\'nombre\'];
                        $id = $c[$i][\'id\'];
                        $valor = $c[$i][\'valor\'];
                        $clase = $c[$i][\'clase\'];
                        $placeholder = $c[$i][\'placeholder\'];
                        $label = $c[$i][\'label\'];
                        $desactivado = $c[$i][\'desactivado\'];

                        echo \'<div class="form-group"> 
                        <label for="\' . $id . \'" class="col-sm-2 control-label">\' . $label . \'</label> 
                        <div class="col-sm-8"> \';
                            formularios_campo($tipo, $nombre, $id, $valor, $clase, $placeholder,$desactivado);
                        echo \'</div> 
                    </div> \';
                    }
                    ?>';





            $f .= ' <div class="form-group"> ' . "\n";
            $f .= '     <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $f .= '       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> ' . "\n";
            $f .= '     </div> ' . "\n";
            $f .= '   </div> ' . "\n";
            $f .= ' </form> ' . "\n";
            return $f;
            break;
        case 'crear.php':
            $fuente = '<h2>' . "\n\n";
            $fuente .= '<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> ' . "\n\n";
            $fuente .= '<?php _t("Nuevo ' . $nombrePlugin . '"); ?></h2> ' . "\n\n";
            $fuente .= '</h2> ' . "\n\n";
            $fuente .= '<form class="form-horizontal" action="index.php" method="post"> ' . "\n";
            $fuente .= '<input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $fuente .= '<input type="hidden" name="c" value="crear"> ' . "\n";
            $fuente .= '<input type="hidden" name="a" value="crear"> ' . "\n\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {


                    $nombre = $reg['Field'];
                    $tipo = $reg['Type'];
                    $nul = $reg['Null'];
                    $clave = $reg['Key'];
                    $defecto = $reg['Default'];
                    $extra = $reg['Extra'];
                    $tabla_nombre = "$nombrePlugin" . "_" . "$nombre";
                    $tipo_campo = tipo_campo($tipo);
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    
                    switch ($tipo_campo) {
                        case 'texto':
                        case 'numerico':                            
                            
                            if(bdd_tiene_id_al_inicio($nombre)){
                                
                              //  $tabla = bdd_busca_tabla_con_nombre_igual_o_parecido($nombre, );
                                
                                $fuente .= campo_html_opciones($var2, $var2, $reg[0], $nombrePlugin, $extras);
                                
                            }else{
                                $fuente .= campo_html_texto($var2, $var2, $reg[0], $reg[0], $nombrePlugin);
                                
                            }
                            
                            break;
                        case 'fecha':
                            $fuente .= campo_html_fecha($var2, $var2, $reg[0], $reg[0], $nombrePlugin);
                            break;
                        case 'areaDeTexto':
                            $fuente .= campo_html_areaDeTexto($var2, $var2, $reg [0], $reg[0], $nombrePlugin);
                            break;
                        case 'buleano':
                            $fuente .= campo_html_buleano($var2, $var2, $reg[0], $nombrePlugin, false);
                            break;

                        default:
                            break;
                    }
                }
                $i++;
            }

            $fuente .= ' <div class="form-group"> ' . "\n";
            $fuente .= '     <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $fuente .= '       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> ' . "\n";
            $fuente .= '     </div> ' . "\n";
            $fuente .= '   </div> ' . "\n";
            $fuente .= ' </form> ' . "\n";


            return $fuente;



            break;

        case 'editar.php':
            $fuente = '<h2>' . "\n\n";
            $fuente .= '<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> ' . "\n\n";
            $fuente .= '<?php _t("Editar ' . $nombrePlugin . '"); ?></h2> ' . "\n\n";
            $fuente .= '</h2> ' . "\n\n";
            $fuente .= '     <form class="form-horizontal" method="post" action="index.php"> ' . "\n";
            $fuente .= '     <input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $fuente .= '     <input type="hidden" name="c" value="editar"> ' . "\n";
            $fuente .= '     <input type="hidden" name="a" value="editar"> ' . "\n";
            $fuente .= '     <input type="hidden" name="' . $nombrePlugin . '_id" value="<?php echo $' . $nombrePlugin . '_id; ?>"> ' . "\n\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {


                    $nombre = $reg['Field'];
                    $tipo = $reg['Type'];
                    $nul = $reg['Null'];
                    $clave = $reg['Key'];
                    $defecto = $reg['Default'];
                    $extra = $reg['Extra'];
                    //
                    $tabla_nombre = "$nombrePlugin" . "_" . "$nombre";
                    //
                    $tipo_campo = tipo_campo($tipo);
                    //                                                
                    $var1 = $reg[0]; // nombre delcampo 
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    
                    $valor ='<?php echo $' . $var2 . '; ?>'; 
                    //                
                    switch ($tipo_campo) {
                        case 'texto':
                        case 'numerico':
                            
                            if(bdd_tiene_id_al_inicio($nombre)){
                                
                              //  $tabla = bdd_busca_tabla_con_nombre_igual_o_parecido($nombre, );
                                
                                $fuente .= campo_html_opciones($var2, $var2, $reg[0], $nombrePlugin, $valor);
                                //function campo_html_opciones($nombre, $id, $label, $tabla, $extras = "") {
                                
                            }else{
                                $fuente .= campo_html_texto($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor);
                                
                            }   






                            //$fuente .= campo_html_texto($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor);
                            break;
                        case 'fecha':
                            $fuente .= campo_html_fecha($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor);                            
                            break;
                        case 'areaDeTexto':
                            $fuente .= campo_html_areaDeTexto($var2, $var2, $reg [0], $reg[0], $nombrePlugin, $valor);
                            break;
                        case 'buleano':
                            $fuente .= campo_html_buleano($var2, $var2, $reg[0], $nombrePlugin, $selecionado = false);
                            break;

                        default:
                            break;
                    }





                    /*



                      $var1 = $reg[0];
                      $var2 = "$nombrePlugin"."_"."$var1";

                      $fuente .= ' <div class="form-group"> ' . "\n";
                      $fuente .= '     <label for="' . $reg[0] . '" class="col-sm-2 control-label"><?php _t("' . ucfirst($reg[0]) . '"); ?></label> ' . "\n";
                      $fuente .= '     <div class="col-sm-10"> ' . "\n";
                      $fuente .= '       <input type="text" class="form-control" name="' . $var2 . '" id="' . $var2 . '" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>" value="<?php echo $' . $var2 . '; ?>"> ' . "\n";
                      $fuente .= '     </div> ' . "\n";
                      $fuente .= '   </div> ' . "\n\n\n";

                     */
                }
                $i++;
            }

            $fuente .= '   <div class="form-group"> ' . "\n";
            $fuente .= ' <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $fuente .= '       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> ' . "\n";
            $fuente .= '     </div> ' . "\n";
            $fuente .= '   </div>     ' . "\n";
            $fuente .= ' </form> ' . "\n";
            return $fuente;
            break;

        case 'index.php':

            $fuente = '<?php include "tabs.php"; ?>' . "\n";
            $fuente .= '<h2> ' . "\n";
            $fuente .= '<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> ' . "\n\n";
            $fuente .= '<?php echo _t("Lista de ' . $nombrePlugin . '"); ?> <a type="button" class="btn btn-primary navbar-btn" href="?p=' . $nombrePlugin . '&c=crear"> <?php _t("Nueva"); ?></a>' . "\n";
            $fuente .= '</h2>' . "\n";

            $fuente .= '
<table class="table table-striped">
    <thead>
        <tr> <td>#</td>' . "\n\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $fuente .= ' <th><?php echo _t("' . ucfirst(bdd_quita_guiones(bdd_quita_id_inicio($reg[0]))) . '"); ?></th> ' . "\n";
                }
                $i++;
            }
            $fuente .= ' <th><?php echo _t("Accion"); ?></th> ' . "\n";
            $fuente .= ' </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "' . $nombrePlugin . '", $_usuarios_grupo)){
             //   include "./' . $nombrePlugin . '/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i=1;
        while ($' . $nombrePlugin . ' = mysql_fetch_array($sql)) {
            include "./' . $nombrePlugin . '/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "' . $nombrePlugin . '", $_usuarios_grupo)){
                    include "./' . $nombrePlugin . '/vista/tr.php";
                   // include "./' . $nombrePlugin . '/vista/tr_editar.php";
                }else{
                    include "./' . $nombrePlugin . '/vista/tr.php";
                }      
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "' . $nombrePlugin . '", $_usuarios_grupo)){
             //   include "./' . $nombrePlugin . '/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 

<?php  
//echo paginacion($p, $c, isset($_REQUEST[\'pag\'])); 
echo paginacion($p, $c, $total_items, isset($_REQUEST[\'pag\']));
?>
    



';

            return $fuente;
            break;

        case 'menu.php':

            $fuente = '<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="' . $nombrePlugin . '">
    <input  type="hidden" name="c" value="buscar">';

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";

                    $fuente .= '
                    <div class="form-group">
                      <label for="' . ucfirst($reg[0]) . '"><?php _t("' . ucfirst(bdd_quita_id_inicio($reg[0])) . '"); ?></label>
                      <input type="text" class="form-control" name="' . $var2 . '" id="' . $var2 . '" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>">
                    </div>
                     ';
                }

                $i++;
            }





            $fuente .= '    
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>';



            return $fuente;
            break;

        case 'paginador.php':
            $fuente = '<?php

function paginacion($p, $c, $inicia = 0, $pagina_actual) {
    global $conexion, $cfg_limite_items_en_tablas, $inicia;

    include "./$p/modelos/$c.php";

    $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);

    $html = \'<nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="index.php?p=\' . $p . \'" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>\';
                $i = 0;
                while ($i < $total_paginas) {                                                            
                    $activo = (isset($pagina_actual) && $pagina_actual == $i ) ? \' class="active" \' : \'\';
                  //  $html .= "<li $activo ><a href=\"index.php?p=$plugin&c=$controlador&pag=$i\">$i</a></li>";                    
                    if( $i >= ($pagina_actual-4) && $i <= ($pagina_actual+4) ){                    
                    $html .= "<li $activo ><a href=\"index.php?p=$p&c=$c&pag=$i\">$i</a></li>";                    
                    }
                    
                    $i++;
                }
                $html .= \'<li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>\';    
    if($total_paginas){return $html;}else{    return false;}   
}
?>';
            return $fuente;

        case 'pdf.php':
            $fuente = ' ' . "\n";

            $i = 0;
            $usar_id = -1; // 0 no usa, -1 si usa el primer campo de la tabla(id)
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";

                    $fuente .= ' '.$nombrePlugin.'_'.$var1.' : %'.$nombrePlugin.'_'.$var1.'% ' . "\n";
                }

                $i++;
            }


            return $fuente;
            break;
            
            

        case 'sidebar.php':
            $fuente = '﻿ <div class="col-sm-3 col-md-2 sidebar"> ' . "\n\n";
            $fuente .= '<h2><?php _t("Buscar"); ?></h2> ' . "\n\n";
            $fuente .= '<form class="" action="index.php" method="get"> ' . "\n";
            $fuente .= '<input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $fuente .= '<input type="hidden" name="c" value="buscar"> ' . "\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";


                    $fuente .= '     <div class="form-group"> ' . "\n";
                    $fuente .= '     <label for="' . $var2 . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_id_inicio($reg[0])) . '");?></label> ' . "\n";
                    // $fuente .= '     <div class="col-sm-10"> ' . "\n";
                    $fuente .= '       <input type="text" class="form-control" name="' . $var2 . '" id="' . $var2 . '" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?> "> ' . "\n";
                    // $fuente .= '     </div> ' . "\n";
                    $fuente .= '   </div> ' . "\n\n\n";
                }
                $i++;
            }
            //  $fuente .= ' <div class="form-group"> ' . "\n";
            //  $fuente .= '     <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $fuente .= '       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> ' . "\n";
            //$fuente .= '     </div> ' . "\n";
            //$fuente .= '   </div> ' . "\n";
            $fuente .= ' </form> ' . "\n";
            $fuente .= ' </div> ' . "\n";
            return $fuente;
            break;

        case 'buscar_form.php':
            $fuente = '<h2>' . "\n\n";
            $fuente .= '<span class="glyphicon glyphicon-search"></span>' . "\n\n";
            $fuente .= '<?php _t("Buscar"); ?> ' . "\n\n";
            $fuente .= '</h2> ' . "\n\n";
            $fuente .= '<form class="" action="index.php" method="get"> ' . "\n";
            $fuente .= '<input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $fuente .= '<input type="hidden" name="c" value="buscar"> ' . "\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";

                    $fuente .= '     <div class="form-group"> ' . "\n";
                    $fuente .= '     <label for="' . $var2 . '" class="col-sm-2 control-label"><?php _t("' . ucfirst(bdd_quita_id_inicio($reg[0])) . '");?></label> ' . "\n";
                    // $fuente .= '     <div class="col-sm-10"> ' . "\n";
                    $fuente .= '       <input type="text" class="form-control" name="' . $var2 . '" id="' . $var2 . '" placeholder="<?php _t("' . ucfirst($var1) . '"); ?> "> ' . "\n";
                    // $fuente .= '     </div> ' . "\n";
                    $fuente .= '   </div> ' . "\n\n\n";
                }
                $i++;
            }
            //  $fuente .= ' <div class="form-group"> ' . "\n";
            //  $fuente .= '     <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $fuente .= '       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> ' . "\n";
            //$fuente .= '     </div> ' . "\n";
            //$fuente .= '   </div> ' . "\n";
            $fuente .= ' </form> ' . "\n";

            return $fuente;
            break;

        case 'tr.php':
            $fuente = ' <?php  ' . "\n";
            $fuente .= '    echo \' <tr>' . "\n";
            $fuente .= '    <td>\'.$i.\'</td> ' . "\n";

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                
                
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    
                    // si el campo tiene _id_ lo quito 
                    $var2 = (strpos($var2, '_id_')) ? str_replace('_id', '', $var2) : $var2;  // eventos_sala    

                    $fuente .= ' <td>\'.$' . $var2 . '.\'</td> ' . "\n";
                }

                $i++;
            }
            $fuente .= ' <td>
<a href=\'.$_SERVER[\'PHP_SELF\'].\'?p=' . $nombrePlugin . '&c=ver&' . $nombrePlugin . '_id=\'.$' . $nombrePlugin . '_id.\'>Ver</a> |  
<a href=\'.$_SERVER[\'PHP_SELF\'].\'?p=' . $nombrePlugin . '&c=editar&' . $nombrePlugin . '_id=\'.$' . $nombrePlugin . '_id.\'>Editar</a>  
                      
                </td></tr>\';  ';

            return $fuente;
            break;



        case 'tabs.php':
            $fuente = '<div>' . "\n\n";
            $fuente .= '  <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">        
                            <a href="#inicio" aria-controls="inicio" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-list-alt"></span>
                                <?php _t(\'Lista\');?>
                                
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buscar" aria-controls="buscar" role="tab" data-toggle="tab">
                                <span class="glyphicon glyphicon-search"></span>
                                <?php _t(\'Buscar\');?>
                            </a>
                        </li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="inicio"></div>
                        <div role="tabpanel" class="tab-pane" id="buscar">
                            <?php include "buscar_form.php"; ?>        
                        </div>        
                      </div>
                    </div>' . "\n\n";
            return $fuente;
            break;



        case 'tr_anadir.php':
            $fuente = '
            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="' . $nombrePlugin . '">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr>';
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    $fuente .= ' <td><input class="form-control" type="text" name="' . $var2 . '" value="" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>"></td> ' . "\n";
                }
                $i++;
            }
            $fuente .= '<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> ';
            return $fuente;
            break;

        case 'tr_editar.php':

            $fuente = ' <?php  ' . "\n";
            $fuente .= '$borrar = (permisos_tiene_permiso("borrar", "' . $nombrePlugin . '", $_usuarios_grupo))?\'<a class="btn btn-danger" href="index.php?p=' . $nombrePlugin . '&c=borrar&a=borrar&id=\'.$id.\'">Borrar</a>\':\'\'; ?>
';



            $fuente .= '<form method="post" action="index.php" >
            <input type="hidden" name="p" value="' . $nombrePlugin . '">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="' . $nombrePlugin . '_id" value="<?php echo $' . $nombrePlugin . '_id; ?>">    
            <tr>';
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    $fuente .= ' <td><input class="form-control" type="text" name="' . $var2 . '" value="<?php echo $' . $var2 . '; ?>" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>"></td> ' . "\n";
                }
                $i++;
            }

            $fuente .= '<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> ';

            return $fuente;
            break;

        case 'tr_buscar.php':
            $fuente = '<form method="get" action="index.php" >
                <input type="hidden" name="p" value="' . $nombrePlugin . '">
                <input type="hidden" name="c" value="buscar">       
                <tr>';

            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    $fuente .= ' <td><input class="form-control" type="text" name="' . $var2 . '" value="" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>"></td> ' . "\n";
                }
                $i++;
            }

            $fuente .= '<td><input class="btn btn-info" type="submit" value="<?php _t("Buscar"); ?>" >
        
        </td>        
    </tr>
</form> ';

            return $fuente;
            break;

            
            
        case 'ver.php':
            $fuente = '<h1> ' . "\n";
            $fuente .= '<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> ' . "\n\n";
            $fuente = '<?php _t("Detalles"); ?> ' . "\n";
            $fuente = '</h1> ' . "\n";

            $fuente .= '     <form class="form-horizontal" method="" action=""> ' . "\n";
            $fuente .= '     <input type="hidden" name="p" value="' . $nombrePlugin . '"> ' . "\n";
            $fuente .= '     <input type="hidden" name="c" value="editar"> ' . "\n";
            $fuente .= '     <input type="hidden" name="' . $nombrePlugin . '_id" value="<?php echo $' . $nombrePlugin . '_id; ?>"> ' . "\n";
            $i = 0;
            $usar_id = 0; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    //*******************
                    $nombre = $reg['Field'];
                    $tipo = $reg['Type'];
                    $nul = $reg['Null'];
                    $clave = $reg['Key'];
                    $defecto = $reg['Default'];
                    $extra = $reg['Extra'];
                    $tabla_nombre = "$nombrePlugin" . "_" . "$nombre";
                    $tipo_campo = tipo_campo($tipo);
                    $var1 = $reg[0];
                    $var2 = "$nombrePlugin" . "_" . "$var1";
                    
                    $valor ='<?php echo $' . $var2 . '; ?>'; 
                    
                    
                    switch ($tipo_campo) {
                        case 'texto':
                        case 'numerico':
                            
                            if(bdd_tiene_id_al_inicio($nombre)){
                                
                              //  $tabla = bdd_busca_tabla_con_nombre_igual_o_parecido($nombre, );
                                
                                $fuente .= campo_html_opciones($var2, $var2, $reg[0], $nombrePlugin, 'disabled');
                                //         campo_html_opciones($nombre, $id, $label, $tabla, $extras = "") {
                                    
                            
                            }else{
                                $fuente .= campo_html_texto($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor,  'disabled');
                                
                            }    



                                //$fuente .= campo_html_texto($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor, 'disabled');
                            break;
                        case 'fecha':
                            $fuente .= campo_html_fecha($var2, $var2, $reg[0], $reg[0], $nombrePlugin, $valor, 'disabled');
                            break;
                        case 'areaDeTexto':
                            $fuente .= campo_html_areaDeTexto($var2, $var2, $reg [0], $reg[0], $nombrePlugin, $valor, 'disabled');
                            break;
                        case 'buleano':
                            $fuente .= campo_html_buleano($var2, $var2, $reg[0], $nombrePlugin, $selecionado = false, 'disabled');
                            break;

                        default:
                            break;
                    }
                    //********************************


                    /*

                      $var1 = $reg[0];
                      $var2 = "$nombrePlugin"."_"."$var1";
                      $fuente .= ' <div class="form-group"> ' . "\n";
                      $fuente .= '     <label for="' . $var2 . '" class="col-sm-2 control-label"><?php _t("' . ucfirst($reg[0]) . '"); ?></label> ' . "\n";
                      $fuente .= '     <div class="col-sm-10"> ' . "\n";
                      $fuente .= '       <input type="text" class="form-control" name="' . $var2 . '" id="' . $var2 . '" placeholder="<?php _t("' . ucfirst($reg[0]) . '"); ?>" value="<?php echo $' . $var2 . '; ?>" disabled=""> ' . "\n";
                      $fuente .= '     </div> ' . "\n";
                      $fuente .= '   </div> ' . "\n";
                      $fuente .= '  ' . "\n\n";

                     */
                }
                $i++;
            }

            $fuente .= '   <div class="form-group"> ' . "\n";
            $fuente .= ' <div class="col-sm-offset-2 col-sm-10"> ' . "\n";
            $fuente .= '       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> ' . "\n";
            $fuente .= '     </div> ' . "\n";
            $fuente .= '   </div>     ' . "\n";
            $fuente .= ' </form> ' . "\n";
            $fuente .= ' <a href="index.php?p='.$nombrePlugin.'&c=txt&' . $nombrePlugin . '_id=<?php echo $' . $nombrePlugin . '_id; ?>">Formato texto</a> ' . "\n";
            return $fuente;
            break;
        
        
        
            
            
        case 'data.php':
            $fuente = "<$nombrePlugin>" . "\n";            
            $i = 0;
            $usar_id = -1; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];

                    
                    
                    $fuente .=  "<$nombrePlugin"."_".$var1.">"."<?php echo $$nombrePlugin"."_"."$var1"."; ?></$nombrePlugin"."_".$var1."> \n";   

                }
                $i++;
            }
            
            $fuente .= "</$nombrePlugin>";

            return $fuente;
            break;
            
            
        case 'txt.php':
            $fuente = ' <?php $html = "' . "\n";            
            $i = 0;
            $usar_id = -1; // 0 no usa, -1 si usa
            foreach ($resultados as $reg) {
                if ($i > $usar_id) {
                    $var1 = $reg[0];

                    $fuente .= "$nombrePlugin"."_".$var1." : "."%$nombrePlugin"."_"."$var1"."%\n";        

                }
                $i++;
            }
            $fuente .='";

                include "./'.$nombrePlugin.'/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>';

            return $fuente;
            break;
   
        default:
            $fuente = "";
            return $fuente;
            break;
    }
}

function contenido_scripts($scripts, $nombrePlugin) {
    global $path_plugins, $dbh;
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($scripts) {

        case 'borrar.php':
            $fuente = '';
            return $fuente;
            break;
        
        
        case 'buscar.php':
            $fuente = '';
            return $fuente;
            break;
        
        case 'crear.php':
            $fuente = '';
            return $fuente;
            break;
        
        case 'editar.php':
            $fuente = '';
            return $fuente;
            break;
        
        
        case 'ver.php':
            $fuente = '';
            return $fuente;
            break;
               
        default:
            $fuente = "";
            return $fuente;
            break;
    }
}

function contenido_reg($controlador, $nombrePlugin) {
    global $path_plugins, $dbh;
    //$resultados = resultados($nombrePlugin);
    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($controlador) {
        
        
        
        case 'data.php':
            $fuente = " <$nombrePlugin> " . "\n";
            $i = 0;
            $usar_id = 'true'; // usa el id inicial de la tabla?
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                // con esto verifico si deseo usar el id de la tabla o no
                if($usar_id && $i!='0'){
                    
                    $fuente .= "<$nombrePlugin> *** </$nombrePlugin>" . "\n";
                } else {
                    $fuente .= '  //$' . $var2 . ' = mysql_real_escape_string($_GET[\'' . $var2 . '\']); ' . "\n";
                }                                
                $i++;
            }            
            $fuente .= "</$nombrePlugin>";
            return $fuente;
            break;
        
        case 'get.php':
            $fuente = ' <?php ' . "\n";
            $i = 0;
            $usar_id = 'false'; // usa el id inicial de la tabla?
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                // con esto verifico si deseo usar el id de la tabla o no
                if($usar_id && $i!='0'){
                    
                    $fuente .= '  $' . $var2 . ' = mysql_real_escape_string($_GET[\'' . $var2 . '\']); ' . "\n";
                } else {
                    $fuente .= '  //$' . $var2 . ' = mysql_real_escape_string($_GET[\'' . $var2 . '\']); ' . "\n";
                }
                
                
                $i++;
            }
            return $fuente;
            break;

            
            
            
            
            
            
            
            
            
            
            
            
            
        case 'post.php':
            $fuente = ' <?php ' . "\n";
            $i = 0;
            $usar_id = 'false'; // usa el id inicial de la tabla?
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                // con esto verifico si deseo usar el id de la tabla o no
                if($usar_id && $i!='0'){
                    
                    $fuente .= '  $' . $var2 . ' = mysql_real_escape_string($_POST[\'' . $var2 . '\']); ' . "\n";
                } else {
                    $fuente .= '  //$' . $var2 . ' = mysql_real_escape_string($_POST[\'' . $var2 . '\']); ' . "\n";
                }
                
                
                $i++;
            }
            return $fuente;
            break;
        case 'reg.php':
            $fuente = ' <?php ' . "\n";
            $i = 0;
            foreach ($resultados as $reg) {



                $nombre = $reg['Field'];
                $tipo = $reg['Type'];
                $nul = $reg['Null'];
                $clave = $reg['Key'];
                $defecto = $reg['Default'];
                $extra = $reg['Extra'];


                $tabla_nombre = "$nombrePlugin" . "_" . "$nombre";

                $tipo_campo = tipo_campo($tipo);


                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";

                $fuente .= '  $' . $var2 . ' = $' . $nombrePlugin . '[\'' . $var1 . '\']; ' . "\n";
                
                
               // $fuente .= ' //******** Campo formateado******************************* ' . "\n";
                
                //*************************************
                if ($tipo_campo == 'buleano') {

                    $fuente .= ' $' . $var2 . '_0 = "";  ';
                    $fuente .= ' $' . $var2 . '_1 = "";  ';

                    $fuente .= '    if($' . $var2 . '==0){
      $' . $var2 . '_0 = " checked "; 
      $' . $var2 . '_1 = ""; 
  }else {
      $' . $var2 . '_0 = ""; 
      $' . $var2 . '_1 = "checked";       
  }  ' . "\n";
                }
                //**************************************                                 
                //$eventos_sala = salas_campo('nombre', $eventos_id_sala);   
                
                $campo = $var2; // eventos_id_sala                
                $campo_sin_id   = str_replace('_id', '', $campo) ; // eventos_sala                
                $var1_sin_id    = str_replace('id_', '', $var1) ; // eventos_sala                
                $posible_nombre = $var1_sin_id.'s_campo' ; // $eventos_sala                                               
                // buscamos si en ese campo existe '_id_' , si existe queire decir que la info pertenere a otra tabla                
                $hay_id = strpos($campo, '_id_');                
                if($hay_id){
                                 //$eventos_sala = salas_campo('nombre', $eventos_id_sala);   
                    $fuente .= "  $$campo_sin_id = $posible_nombre('$var1_sin_id', $$campo);  \n" ; 
                }
                
                
                
                






                $i++;
            }

            return $fuente;
            break;
        case 'request.php':
            $fuente = ' <?php ' . "\n";
            $i = 0;
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                $fuente .= '  $' . $var2 . ' = mysql_real_escape_string($_REQUEST[\'' . $var2 . '\']); ' . "\n";
                $i++;
            }
            return $fuente;
            break;

        case 'var.php':
            $fuente = ' <?php ' . "\n";
            $i = 0;            
            $fuente .= ' $datos= [
            "'.$nombrePlugin.'"=>[';            
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                // $fuente .= '  $' . $var2 . ' = mysql_real_escape_string($_GET[\'' . $var2 . '\']); ' . "\n";
              // $fuente .= '  $html = str_replace(\'%' . $nombrePlugin . '_' . $var1 . '%\',       $datos[\'' . $nombrePlugin . '\'][\'' . $var1 . '\'], $html); ' . "\n";
                $fuente .= ' "'.$var1.'"=>"$'.$nombrePlugin.'_'.$var1.'",  ' . "\n";
                $i++;
            }                
            $fuente .='                ]
        ];'; 
            
            foreach ($resultados as $reg) {
                $var1 = $reg[0];
                $var2 = "$nombrePlugin" . "_" . "$var1";
                // $fuente .= '  $' . $var2 . ' = mysql_real_escape_string($_GET[\'' . $var2 . '\']); ' . "\n";
                $fuente .= '  $html = str_replace(\'%' . $nombrePlugin . '_' . $var1 . '%\',       $datos[\'' . $nombrePlugin . '\'][\'' . $var1 . '\'], $html); ' . "\n";
                $i++;
            }
            return $fuente;
            break;


        default:
            $fuente = "";
            return $fuente;
            break;
    }
}

function contenido_plugin($pagina, $nombrePlugin) {
    global $path_plugins, $dbh;

    include "./modelos/v_crea_plug.php";
    $total_resultados = count($resultados);


    switch ($pagina) {
        case 'funciones.php':

            //return $fuente;
            break;
        
        
        
        
        case 'readme.txt':
            $fuente = "Plugin: $nombrePlugin ";
            return $fuente;
            break;
        case 'COPYING':
            $fuente = "Aca escriba el texto de la licencia del plugin: $nombrePlugin ";
            return $fuente;
            break;
        case '.gitignore':
            $fuente = "poner las exepciones para el github ";
            return $fuente;
            break;
        case 'version':
            $fuente = "0.01 ";
            return $fuente;
            break;
        case 'menu':
            $fuente = "<ul><li>Menu</li></ul>";
            return $fuente;
            break;
        default :
            return;
            break;
    }
}

function contenido_admin($pagina) {
    global $servidor, $bdatos, $usuario, $clave;
    switch ($pagina) {
        case 'bd.php':
            $fuente = '<?php  
$bd_servidor = "' . $servidor . '"; 
$bd_bdatos = "' . $bdatos . '"; 
$bd_usuario = "' . $usuario . '"; 
$bd_clave = "' . $clave . '";';
            return $fuente;
            break;

        case 'conec.php':
            $fuente = '<?php	
$dbh = new PDO("mysql:host=$servidor; dbname=$bdatos",   $usuario, $clave);
';
            return $fuente;
            break;
        case 'coneccion.php':
            $fuente = '<?php
$conexion = mysql_connect("$servidor", "$usuario", "$clave") or die("Problemas en la conexion");
mysql_select_db("$bdatos", $conexion) or die("Problemas conexion en local");

';
            return $fuente;
            break;
        case 'configuracion.php':
            $fuente = '<?php 
$config_nombre_web          = "Mi sitio web";
$config_idioma_por_defecto  = "es"; 
$cfg_limite_items_en_tablas = 25; 
';
            return $fuente;
            break;
        case '-------funciones.php':
            $fuente = '<?php 

function _campo($tabla, $id, $campo) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla WHERE id = \'$id\'   ", $conexion) or die("Error:" . mysql_error());
    $reg = mysql_fetch_array($sql);
    return $reg[$campo];
}



function _incluir_funciones(){
    
    $funciones = _listar_directorios_ruta();
    foreach ($funciones as $valor) {
        
        $f = "./$valor/funciones.php"; 
        
        if(file_exists($f)){
            include $f; 
        }
        else {
            $sms = "El plugin $valor no existe";  
            return $sms ;
        }
        
    }
}
function _listar_directorios_ruta($ruta="./"){ 
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         $carpetas = [];
          while (($file = readdir($dh)) !== false) { 
            //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio 
            //mostraría tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               
               $c = array_push($carpetas, $file);
               
                
              //  echo "<br>Directorio: $ruta$file"; 
               
              // _listar_directorios_ruta($ruta . $file . "/"); 
            } 
         } 
      closedir($dh); 
      } 
}else {
      echo "<br>No es ruta valida"; 
}
return $carpetas;

}



function _magia_menu($selecionado){
$menu_items = _listar_directorios_ruta();
$menu_total_items = count(_listar_directorios_ruta());
$i = 0;
while ($i < $menu_total_items) {    
    
    $activa = ($selecionado == $menu_items[$i] )? \'active\' : 0 ;  
    if($activa){
        $clase = \' glyphicon glyphicon-folder-open \'; 
    }else  {
        $clase = \' glyphicon glyphicon-folder-close \'; 
    }
    
    if($menu_items[$i] != \'home\'){
    echo \'<li class="\'.$activa.\'"><a href="?p=\' . $menu_items[$i] . \'&c=index"> <span class="\'.$clase.\'"></span> \' . ucwords($menu_items[$i]) . \'</a></li>\';
    }
    $i++;    
}

}

function _estatus($estatus) {
    if($estatus==0){
        return _t("Activo");
    }else {
        return _t("Bloqueado");
    }
}
';
            return $fuente;
            break;
        case 'index.php':
            $fuente = '<?php 
include "bd.php";
include "conec.php";
include "coneccion.php";
include "funciones.php";
include "permisos.php";
incluir_funciones();
?>
<?php
    $p = (isset($_REQUEST[\'p\']))?  $_REQUEST[\'p\']  : "admin" ; 
    $c = (isset($_REQUEST[\'c\']))?  $_REQUEST[\'c\']  : "index" ; 
    
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MagiaPHP">
    <link rel="icon" href="../../favicon.ico">
    <title>Admin</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="starter-template.css" rel="stylesheet">
    <link href="modelo.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" 
                    class="navbar-toggle collapsed" 
                    data-toggle="collapse" 
                    data-target="#navbar" 
                    aria-expanded="false" 
                    aria-controls="navbar">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">MagiaPHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">                                       
                <?php
                magia_menu($p);
                ?>
            </ul>
        </div>
    </div>
</nav>
      
      
<div class="container">  
<div class="row">
    <div class="col-lg-12">
    <?php
    $url = "./$p/controlador/";
    $url .= "$c";
    $url .= ".php";       
    include "$url";      
    ?>
    </div>
</div>
    </div><!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
';
            return $fuente;
            break;
        case 'modelo.css':
            $fuente = 'body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: center;
}';
            return $fuente;
            break;
        case 'permisos.php':
            $fuente = '<?php 
function permisos_obtiene_permiso($p,$g){
    global $conexion;
$sql=mysql_query( 
 "SELECT permiso  FROM _permisos WHERE grupo = \'$g\' and pagina = \'$p\'  ",$conexion);
 $reg = mysql_fetch_array($sql);	   
 return $reg[0];
}



function permisos_tiene_permiso($accion, $pagina, $grupo){  

if($accion==\'buscar\'){$accion = \'ver\';}


    $p = permisos_obtiene_permiso($pagina,$grupo);    
    $ver     = $p[0];
    $crear   = $p[1];
    $editar  = $p[2];
    $borrar  = $p[3];
    
    switch ($accion) {
        case "ver":
            //return ($ver == 1)? true:false; 
            return ($ver)? true:false; 
            break;
        
        case "crear":
            return ($crear)? true:false; 
            break;
        
        case "editar":
            return ($editar)? true:false; 
            break;
        
        case "borrar":
            return ($borrar)? true:false; 
            break;

        default: // por defecto enviamos falso
            return false;    
            break;
    }
    
    
    
    
}

function permisos_sin_permiso($accion, $pagina, $_usuarios_usuario){
    
    echo "Estimado $_usuarios_usuario, ud no puede realizar la accion [$accion] en la pagina [$pagina]"; 
    
}


';
            return $fuente;
            break;
        case 'traductor.php':
            $fuente = '<?php

function _traducir($f, $ccontexto="", $idioma="") {
    echo $f;
}

function _t($frase, $contexto="", $idioma="") {
global $config_idioma_por_defecto; 
   $idioma = (!$idioma)? $config_idioma_por_defecto : $idioma ;
   
   if(!$contexto){
       $contexto = "";
   }

$id_contenido = contenido_id_frase_segun_frase_contexto($frase, $contexto); 


if(!$id_contenido){
    contenido_registra($frase, $contexto);
$id_contenido = contenido_id_frase_segun_frase_contexto($frase, $contexto); 
}
    

// sacamos la traduccion 

$frase_traducida = traduccion_segun_id_contenido_idioma($id_contenido, $idioma);

// si no hay traduccion registramos la traduccicon 

if(!$frase_traducida){
    $traduccion = "$frase"; 
    
    traduccion_registra_traduccion($id_contenido, $idioma, $traduccion);
    $frase_traducida = traduccion_segun_id_contenido_idioma($id_contenido, $idioma);
}
    
    echo $frase_traducida;
}


// si existe devuelve la traduccion sino devuelve falso
function traduccion_segun_id_contenido_idioma($id_contenido,$idioma) {
    global $conexion;
   $sql=mysql_query("SELECT traduccion FROM _traducciones WHERE contenido_id = \'$id_contenido\' AND idioma = \'$idioma\' ",$conexion) 
       or die ("Error:".mysql_error());   
   $reg = mysql_fetch_array($sql);
   
    $total = mysql_num_rows($sql);
    if($total > 0){
        return $reg[0] ;
    }else{
        return FALSE;
    } 
    
}
function traduccion_registra_traduccion($id_contenido, $idioma, $traduccion) {
    global $conexion;
   $sql=mysql_query("INSERT INTO _traducciones (contenido_id, idioma, traduccion) VALUES (\'$id_contenido\',\'$idioma\',\'$traduccion\') ",$conexion) 
   or die ("Error:".mysql_error());     
return 0;
}';
            return $fuente;
            break;
        case 'contenido.php':
            $fuente = '<?php

// si existe devuelve la traduccion sino devuelve falso
function contenido_id_frase_segun_frase_contexto($frase,$contexto="") {
    global $conexion;
    
    if(!$contexto){
        $filtro = " WHERE frase = \'$frase\' AND contexto =\'\' "; 
    } else {
        $filtro = " WHERE frase = \'$frase\' AND contexto = \'$contexto\'  "; 
    }
        
   $sql=mysql_query("SELECT id FROM _contenido $filtro ",$conexion) 
       or die ("Error:".mysql_error());   
   $reg = mysql_fetch_array($sql);
   
    $total = mysql_num_rows($sql);
    if($total > 0){
        return $reg[0];
    } else {
        return FALSE;
    } 
    
}
function contenido_registra($frase,$contexto="") {
    global $conexion;
    
    if(!$contexto){
        $contexto = null;
    }
    
   $sql=mysql_query("INSERT INTO _contenido (frase, contexto) "
           . "VALUES (\'$frase\',\'$contexto\') ",$conexion) 
   or die ("Error:".mysql_error());        
   
return 0;
}';
            return $fuente;
        case 'menu.php':
            $fuente = '<?php
function _menu_top(){
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre) FROM _menu WHERE ubicacion = \'top\'  ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        echo \'<li class="dropdown">
          <a href="#" 
          class="dropdown-toggle" 
          data-toggle="dropdown" 
          role="button" 
          aria-haspopup="true" 
          aria-expanded="false">
          \'.$reg[padre].\' 
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            \'; 
            
             _menu_items_segun_padre_ubicacion($reg[\'padre\'], \'top\');
        
            echo \'<li role="separator" class="divider"></li>            
            
            
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>\'; 
    }        
}
function _menu_items_segun_padre_ubicacion($padre, $ubicacion){
    global $conexion;
    $sql = mysql_query(
            "SELECT label, url FROM _menu WHERE padre = \'$padre\' AND ubicacion = \'$ubicacion\'  ORDER BY orden  ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        echo \'
            <li><a href="\'.$reg[\'url\'].\'">\'.$reg[\'label\'].\'</a></li>
          
        \'; 
    }
    
    
}

//------------------------------------------------------
function _menu_sidebar($p){
    global $conexion;
    $sql = mysql_query(
            "SELECT distinct(padre), label, url  FROM _menu WHERE ubicacion = \'sidebar\'  ", $conexion) or die("Error:" . mysql_error());
        
    while ($reg = mysql_fetch_array($sql)) {
        echo \'<li\';
        if ($p == $reg[\'label\']) { echo " class=\"active\" "; } 
        echo \'>
                    <a href="\'.$reg[url].\'">
                        <span class="glyphicon glyphicon-folder-close"></span> 
                \'.$reg[\'label\'].\'
                    </a>
                </li>\'; 
    }        
}



';
            return $fuente;
        case 'formularios.php':
            $fuente = '<?php


function formularios_campo_escondido($nombre,$valor){    
    echo \'<input type="hidden" name="\'.$nombre.\'" value="\'.$valor.\'">\'; 
}


function formularios_campo($tipo, $nombre, $id, $valor="", $clase="", $placeholder=""){    
    echo \'<input 
                type="\'.$tipo.\'" 
                name="\'.$nombre.\'" 
                value="\'.$valor.\'" 
                id="\'.$id.\'"                 
                class="\'.$clase.\'"                                     
                placeholder="\'.$placeholder.\'" > \'; 
}
function formularios_opciones(){
    
}


function _formulario_texto($nombre, $marca_agua="",$valor="", $desactivar=false, $clase="form-control") {    
    
    $desactivado    = ($desactivar)? " disabled " : "";
    //$clase          = ($clase)? " form-control " : "";
    
    return "<input "
            . "type=\"text\" "
            . "class=\"$clase\" "
            . "name=\"$nombre\" "
            . "id=\"$nombre\" "
            . "placeholder=\"$marca_agua\" "
            . "value=\"$valor\" $desactivado > ";
}


function _formulario_opciones($tabla, $campo, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $reg[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $reg[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$reg[0]\">$reg[0]</option>";
    }
}

function _formulario_radio($tabla, $campo, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        echo "<input ";
        if ($selecionado == $reg[0]) {
            echo " checked ";
        } else {
            echo "";
        }
        if ($excluir == $reg[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "type=\"radio\" name=\"$campo\" id=\"$reg[0]\" value=\"$reg[0]\" ><label for=\"$reg[0]\">$reg[0]</label> \n";
    }
}

function _formulario_checkbox($tabla, $campo, $selecionar = "", $desactivar = "",$excluir="") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        $seleccionado   =  ($selecionar == $reg[0]) ? " checked " : "" ;
        $excluido       =  ($excluir == $reg[0]) ? true : false ;
        $desactivado    =  ($desactivar == $reg[0]) ? " disabled " : "" ;
        
        if(!$excluido){
        echo "<input "
        . "$seleccionado "
                . "$excluido "
                . "$desactivado "
                . "type=\"checkbox\" "
                . "name=\"$reg[0]\" "
                . "id=\"$reg[0]\" "
                . "value=\"$reg[0]\" >"
                . "<label for=\"$reg[0]\">$reg[0]</label>\n ";
        }
    }
}


';
            return $fuente;
    }
}

function contenido_extenciones_funciones($nombrePlugin) {

            $fuente = '<?php ';
            
            
            
            
            $fuente .= 'function ' . $nombrePlugin . '_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM ' . $nombrePlugin . ' WHERE id = $id   ", $conexion) or die("Error: ' . $nombrePlugin . '_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql); 
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}';
            
         
            
            
            
            
            
            
            $fuente .= 'function ' . $nombrePlugin . '_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or die("Error:" . mysql_error());
    while ($' . $nombrePlugin . ' = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $' . $nombrePlugin . '[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $' . $nombrePlugin . '[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$' . $nombrePlugin . '[$campo]\">$' . $nombrePlugin . '[$campo]</option> \n";
    }
}

function ' . $nombrePlugin . '_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM ' . $nombrePlugin . '  ",$conexion) or die ("Error:".mysql_error());
while ($' . $nombrePlugin . ' = mysql_fetch_array($sql)) {
    
   echo "<option "; 
   if($selecionado==$' . $nombrePlugin . '[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$' . $nombrePlugin . '[0]) {echo " disabled "; } else {echo ""; }
   echo "value=\"$' . $nombrePlugin . '[0]\">$' . $nombrePlugin . '[0]</option>";
} 
}

';

            return $fuente;    
 


}

function contenido_config($pagina) {
    switch ($pagina) {
        case 'footer.php':
            $fuente = '<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
    </div><!-- /.container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
';
            return $fuente;
            break;
        case 'funciones.php':
            $fuente = '// funciones';
            return $fuente;
            break;
        case 'header.php':
            $fuente = 'header contenido';
            return $fuente;
            break;
        case 'index.php':
            $fuente = 'index contenido';
            return $fuente;
            break;
        case 'menu.php':
            $fuente = 'menu contanido';
            return $fuente;
            break;
        case 'modelo.css':
            $fuente = '';
            return $fuente;
            break;
        case 'z_verificar.php':
            $fuente = 'verif';
            return $fuente;
            break;
    }
}

function contenido_gestion($pagina) {
    switch ($pagina) {
        case 'estilo.css':
            $fuente = '/*-------------------------
    Simple reset
--------------------------*/


*{
    margin:0;
    padding:0;
}


/*-------------------------
    General Styles
--------------------------*/

/*----------------------------
    The file upload form
-----------------------------*/
#upload{
    font-family:\'PT Sans Narrow\', sans-serif;
    background-color:#373a3d;

    background-image:-webkit-linear-gradient(top, #373a3d, #313437);
    background-image:-moz-linear-gradient(top, #373a3d, #313437);
    background-image:linear-gradient(top, #373a3d, #313437);

    width:250px;
    padding:30px;
    border-radius:3px;

    margin:20px auto 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    width: auto; 
}

#drop{
    background-color: #2E3134;
    padding: 40px 50px;
    margin-bottom: 30px;
    border: 20px solid rgba(0, 0, 0, 0);
    border-radius: 3px;
    border-image: url(\'../img/border-image.png\') 25 repeat;
    text-align: center;
    text-transform: uppercase;

    font-size:16px;
    font-weight:bold;
    color:#7f858a;
}




#drop input{
    display:none;
}

#upload ul{
    list-style:none;
    margin:0 -30px;
    border-top:1px solid #2b2e31;
    border-bottom:1px solid #3d4043;
}

#upload ul li{

    background-color:#333639;

    background-image:-webkit-linear-gradient(top, #333639, #303335);
    background-image:-moz-linear-gradient(top, #333639, #303335);
    background-image:linear-gradient(top, #333639, #303335);

    border-top:1px solid #3d4043;
    border-bottom:1px solid #2b2e31;
    padding:15px;
    height: 52px;

    position: relative;
}

#upload ul li input{
    display: none;
}

#upload ul li p{
    width: 144px;
    overflow: hidden;
    white-space: nowrap;
    color: #EEE;
    font-size: 16px;
    font-weight: bold;
    position: absolute;
    top: 20px;
    left: 100px;
}

#upload ul li i{
    font-weight: normal;
    font-style:normal;
    color:#7f7f7f;
    display:block;
}

#upload ul li canvas{
    top: 15px;
    left: 32px;
    position: absolute;
}

#upload ul li span{
    width: 15px;
    height: 12px;
    background: url(\'../img/icons.png\') no-repeat;
    position: absolute;
    top: 34px;
    right: 33px;
    cursor:pointer;
}

#upload ul li.working span{
    height: 16px;
    background-position: 0 -12px;
}

#upload ul li.error p{
    color:red;
}
';
            return $fuente;
            break;
        case 'index.php':
            $fuente = '<?php
session_start("inmoweb_username") ;
include "z_verificar.php";
include "../admin/bd.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "../admin/funciones.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title><?php echo "$config_nombre_web"; ?></title>

        <link rel="stylesheet" href="../includes/js/jquery-ui-1.10.3/themes/base/jquery.ui.all.css">
        <link rel="stylesheet" href="../includes/js/jquery-ui-1.10.3/demos.css">
        <script src="../includes/js/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
        <script src="../includes/js/jquery-ui-1.10.3/ui/jquery.ui.core.js"></script>
        <script src="../includes/js/jquery-ui-1.10.3/ui/jquery.ui.widget.js"></script>
        <script src="../includes/js/jquery-ui-1.10.3/ui/jquery.ui.datepicker.js"></script>
        <script src="../includes/js/jquery-ui-1.10.3/ui/jquery.ui.tabs.js"></script>

        <link href="../includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../modelos/font-awesome/css/font-awesome.min.css">
        <link href="home/vista/gestion.css" rel="stylesheet">
        <script src="../includes/bootstrap/js/ie-emulation-modes-warning.js"></script>
        <link href="estilo.css" rel="stylesheet" />


    </head>

    <body>

<?php
include "home/vista/nav_sup.php";
?>

        <div class="container-fluid"> <!-- 1 -->
            <div class="row">	<!-- 2 -->

                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> <!-- 3 --> 

<?php
$p = (isset($_REQUEST[\'p\']))? $_REQUEST[\'p\']  : "home" ;
$c = (isset($_REQUEST[\'c\']))? $_REQUEST[\'c\']  : "index" ;



switch ($p) {
    case \'config\':
        include "config/vista/sidebar.php";
        break;

    default:
        include "home/vista/sidebar.php";
        break;
}


include \'./\'.$p.\'/controlador/\'.$c.\'.php\';

?>

                </div>	  <!-- /3 --> 
            </div>  <!-- /2 -->
        </div>	<!-- /1 -->

<?php
include "home/vista/footer.php";
?>

        <!-- JavaScript Includes -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="./img2/assets/js/jquery.knob.js"></script>

        <!-- jQuery File Upload Dependencies -->
        <script src="./img2/assets/js/jquery.ui.widget.js"></script>
        <script src="./img2/assets/js/jquery.iframe-transport.js"></script>
        <script src="./img2/assets/js/jquery.fileupload.js"></script>

        <!-- Our main JS file -->
        <script src="./img2/assets/js/script.js"></script>


    </body>
</html>

';
            return $fuente;
            break;
        case 'z_index.php':
            $fuente = 'z-index contenido';
            return $fuente;
            break;

        case 'z_login.php':
            $fuente = 'z_login contenido';
            return $fuente;
            break;


        case 'z_logount.php':
            $fuente = 'logunt contanido';
            return $fuente;
            break;


        case 'z_verificar.css':
            $fuente = 'z-verfi';
            return $fuente;
            break;

        case 'z_login.php':
            $fuente = 'zz_login';
            return $fuente;
            break;
    }
}

function contenido_publica($pagina) {
    switch ($pagina) {
        case 'carrusel.css':
            $fuente = '/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-bottom: 40px;
  color: #5a5a5a;
}


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper > .container {
  padding-right: 0;
  padding-left: 0;
}
.navbar-wrapper .navbar {
  padding-right: 15px;
  padding-left: 15px;
}
.navbar-wrapper .navbar .container {
  width: auto;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 20px;
  text-align: center;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-right: 10px;
  margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
  }
  .navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
  }
  .navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
  }

  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 992px) {
  .featurette-heading {
    margin-top: 120px;
  }
}
';
            return $fuente;
            break;


        case 'carrusel.php':
            $fuente = '
<!-- Carousel 
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" 
                 src="imagenes/magia_php3.jpg" 
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you are viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" 
                 src="imagenes/magia_php2.jpg" 
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        
        <div class="item">
            <img class="third-slide" 
                 src="imagenes/magia_php4.jpg" 
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>        
        
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

';
            return $fuente;
            break;
        case 'detalles.php':
            $fuente = 'DEtalles';
            return $fuente;
            break;
        case 'index.php':
            $fuente = '
<?php
//session_start("magia_php") ;
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//include "z_verificar.php";
include "admin/bd.php";
include "admin/configuracion.php";
include "admin/coneccion.php";
include "admin/conec.php";
include "admin/funciones.php";
include "admin/getbootstrap.php";
include "admin/permisos.php";
include "admin/traductor.php";
include "admin/contenido.php";
include "admin/formularios.php";
include "admin/menu.php";
include "admin/paginacion.php";
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";
$p = (isset($_REQUEST["p"])) ? $_REQUEST["p"] : "empresas";
$c = (isset($_REQUEST["c"])) ? $_REQUEST["c"] : "index";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <link href="carrusel.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>

    <body>


        <div class="navbar-wrapper">
            <div class="container">
                <?php include "nav_superior.php"; ?>

            </div>
        </div>



        <?php include "carrusel.php"; ?>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-3">
                    
                    
                    
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">categoria</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
                    
                    
                    
<div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
                    
                    
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?php
                        include "./gestion/$p/controlador/publico/$c.php";
                        ?>
                        <?php
                      //  include "./gestion/empresas/controlador/publico/index.php";
                        ?>
                        <?php
                        //include "./gestion/empresas/controlador/publico/index.php";
                        ?>
                    </div>
                </div>


            </div>


            <?php
            /*            <!-- START THE FEATURETTES -->

              <hr class="featurette-divider">

              <div class="row featurette">
              <div class="col-md-7">
              <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It ll blow your mind.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
              <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
              <div class="col-md-7 col-md-push-5">
              <h2 class="featurette-heading">Oh yeah, it s that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
              <div class="col-md-7">
              <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
              <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
              </div>
              </div>

              <hr class="featurette-divider">

              <!-- /END THE FEATURETTES --> */
            ?>


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2015 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        <script src="includes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


    </body>
</html>
                
';
            return $fuente;
            break;
        case 'nav_superior.php':
            $fuente = '<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            
            <form method="post" action="gestion/z_login.php" class="navbar-form navbar-right">
                <input type="text" name="username" id="username" class="form-control" placeholder="Login" autofocus>
                <input type="password" name="password" id="password" class="form-control" placeholder="Clave">
                <button type="submit" class="btn btn-danger">Entrar</button>
            </form>
          


        </div>
    </div>
</nav>
';
            return $fuente;
            break;
        case 'estilo.css':
            $fuente = '/*Aca puedes escribir tu propia hoja css*/';
            return $fuente;
            break;
        case 'otro.php':
            $fuente = '';
            return $fuente;
            break;
    }
}

function registrar_pagina_en_bd($pagina) {
    global $dbh;
    $sql = "INSERT INTO _paginas (pagina) VALUES (:pagina)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
        ":pagina" => "$pagina"
            )
    );
}

function registrar_permiso_pagina_grupo($grupo, $pagina, $permiso) {
    global $dbh;
    $sql = "INSERT INTO _permisos (grupo,pagina,permiso) VALUES (:grupo,:pagina,:permiso)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
        ":grupo" => "$grupo",
        ":pagina" => "$pagina",
        ":permiso" => "$permiso",
            )
    );
}

function registra_item_al_menu($plugin, $ubicacion, $padre, $label) {
    global $dbh;

    $sql = "INSERT INTO _menu (ubicacion, padre,label,url,orden) VALUES (:ubicacion, :padre,:label,:url,:orden)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(
        ":ubicacion" => "$ubicacion",
        ":padre" => "$padre",
        ":label" => "$label",
        ":url" => "?p=$plugin&c=index",
        ":orden" => 0
            )
    );
}

function magia_crear_ficheros_dentro_mvc($nombrePlugin, $mvcg) {
    global $path_plugins, $dbh, $icon_fichero_copiar;

    switch ($mvcg) {
        case 'controlador':
            $c = ['index.php', 
                'data.php', 
                'ver.php', 
                'txt.php',
                'crear.php', 
                'editar.php', 
                'borrar.php', 
                'buscar.php'];
            $i = 0;
            while ($i < count($c)) {
                $path = "$path_plugins/$nombrePlugin/controlador";
                // este va a ser el contedido que vamos a escribir en el documento
                $contenido = contenido_controlador($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                $i++;
            }
            break;
        case 'modelos':
            $c = ['index.php', 'ver.php', 'crear.php', 'editar.php', 'borrar.php', 'buscar.php'];
            $i = 0;
            while ($i < count($c)) {
                $path = "$path_plugins/$nombrePlugin/modelos";
                // este va a ser el contedido que vamos a escribir en el documento
                $contenido = contenido_modelos($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                $i++;
            }
            break;
        case 'reg':
            $c = ['get.php', 'post.php', 'reg.php', 'request.php', 'var.php'];
            $i = 0;
            while ($i < count($c)) {
                $path = "$path_plugins/$nombrePlugin/reg";
                // este va a ser el contedido que vamos a escribir en el documento
                $contenido = contenido_reg($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                $i++;
            }
            break;            
        case 'scripts':
            //estas son las paginas  a crear
            $c = ['borrar.php', 'buscar.php','crear.php','editar.php','ver.php'];
            $total = count($c);
            $i = 0;
            while ($i < $total) {
                $path = "$path_plugins/$nombrePlugin/scripts";
                // este va a ser el contedido que vamos a escribir en el documento
                $contenido = contenido_scripts($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                $i++;
            }
            break;                                                
        case 'vista':
            //estas son las paginas  a crear
            $c = [
                'borrar.php',
                'buscar.php',
                'buscar_form.php',
                'crear.php',
                'data.php',
                'editar.php',
                'index.php',
                'sidebar.php',
                'menu.php',
                'paginador.php',
                'pdf.php',
                'tabs.php',
                'tr.php',
                'tr_anadir.php',
                'tr_editar.php',
                'tr_buscar.php',
                'ver.php',
                'txt.php'
            ];
            $total = count($c);
            $i = 0;
            while ($i < $total) {
                $path = "$path_plugins/$nombrePlugin/vista";
                // este va a ser el contedido que vamos a escribir en el documento
                $contenido = contenido_vista($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                $i++;
            }
            break;
        case 'raiz':

            $c = [
                'funciones.php',
                'index.php',
                'readme.txt',
                'COPYING',
                '.gitignore',
                'version',
                'menu'
            ];
            $total = count($c);
            $i = 0;
            while ($i < $total) {
                $path = "$path_plugins/$nombrePlugin";
                // este va a ser el contedido que vamos a escribir en el documento                
                $contenido = contenido_plugin($c[$i], $nombrePlugin);
                crear_fichero($path, "$c[$i]", $contenido);
                echo "<p>-----<b>$icon_fichero_copiar</b> $c[$i] se ha llenado el contenido </p>";
                $i++;
            }

            break;
        default :
            break;
    }
}

function magia_crear_ficheros_en_proyecto($nombreProyecto) {
    global $path_web, $icon_fichero_copiar;


    // preparo las carpetas a crear    
    $carpetas = [
        'admin',
        'gestion',
        'imagenes',
        'includes',
        'extenciones'
    ];
    // con esto creo las carpetas
    crear_carpetas($path_web, $carpetas);
    // copiamos el home en gestion y en config
    copiar_carpeta("./codigo_fuente/admin", "$path_web/admin");
    copiar_carpeta("./codigo_fuente/gestion", "$path_web/gestion");
    copiar_carpeta("./codigo_fuente/imagenes", "$path_web/imagenes");
    copiar_carpeta("./codigo_fuente/includes", "$path_web/includes");
    copiar_carpeta("./codigo_fuente/extenciones/funciones", "$path_web/extenciones/funciones");


    // ahora creamos los ficheros dentro de las carpetas
    // llenamos el contenido de los ficheros

    $i = 0;
    while ($i < count($carpetas)) {
        if (file_exists("$path_web/$carpetas[$i]")) {
            // creamos los ficheros denttro de cada carpeta del proyecto
            switch ($carpetas[$i]) {
                case 'admin':
                    $ficheros = [
                        'bd.php'
                            /*'conec.php',
                              'coneccion.php',
                              'configuracion.php',
                              'funciones.php',
                              'index.php',
                              'menu.php',
                              'modelo.css',
                              'permisos.php',
                              'traductor.php',
                              'contenido.php',
                              'formularios.php' */
                    ];
                    $j = 0;
                    while ($j < count($ficheros)) {
                        crear_fichero("$path_web/admin", $ficheros[$j], contenido_admin($ficheros[$j]));
                        $j++;
                    }
                    break;
                case '--config':
                    $ficheros = [
                        'footer.php',
                        'funciones.php',
                        'header.php',
                        'index.php',
                        'menu.php',
                        'modelo.css',
                        'z_verificar.php'
                    ];
                    crear_carpeta($path_web, 'config');
                    $j = 0;
                    while ($j < count($ficheros)) {
                        crear_fichero("$path_web/config", $ficheros[$j], contenido_config($ficheros[$j]));
                        $j++;
                    }
                    break;
                case '--gestion---------------------':
                    $ficheros = [
                        'estilo.css',
                        'index.php',
                        'z_index.php',
                        'z_login.php',
                        'z_logout.php',
                        'z_verificar.php',
                        'zz_login.php'
                    ];
                    crear_carpeta($path_web, 'gestion');

                    $j = 0;
                    while ($j < count($ficheros)) {

                        crear_fichero("$path_web/gestion", $ficheros[$j], contenido_gestion($ficheros[$j]));
                        $j++;
                    }
                    break;
            }
        }

        $i++;
    }

    // con esto creo el index de la parte publica del proyecto

    $ficheros_publicos = [
        'carrusel.css',
        'estilo.css',
        'carrusel.php',
        'detalles.php',
        'index.php',
        'nav_superior.php'
    ];


    $j = 0;
    while ($j < count($ficheros_publicos)) {

        crear_fichero("$path_web", $ficheros_publicos[$j], contenido_publica($ficheros_publicos[$j]));
        $j++;
    }
}

function _t($palabra) {
    return $palabra;
}

?>
