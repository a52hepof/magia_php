<?php
$raiz = $_REQUEST['path_web']; 
$gestion = $_REQUEST['path_web'] ."/gestion"; 

$fp = fopen('admin/config.php', 'w');
$c = '<?php ' ; 
$c .= ' $path_web = "'.$raiz.'";';
$c .= ' $path_plugins = "'.$gestion.'";';
$c .= ' $path_plugins_controlador = "'.$_REQUEST['path_plugins_controlador'].'";';
$c .= ' $path_plugins_modelos = "'.$_REQUEST['path_plugins_modelos'].'";';
$c .= ' $path_plugins_vista = "'.$_REQUEST['path_plugins_vista'].'";';
$c .= ' $path_plugins_reg = "'.$_REQUEST['path_plugins_reg'].'";';
$c .= ' $path_temas = "'.$_REQUEST['path_temas'].'";';
fwrite($fp, $c);
fclose($fp);






