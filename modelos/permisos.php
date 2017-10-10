<?php

echo shell_exec("chmod -R 777 $path_web");

$permiso =  substr(sprintf('%o', fileperms($path_web)), -4);



if( $permiso == "0777"){
    mensaje('ok', 'Peemisos 0777 dados correctamente'); 
}else{
    mensaje('error', 'hubo un error, de los permisos manualmente'); 
}