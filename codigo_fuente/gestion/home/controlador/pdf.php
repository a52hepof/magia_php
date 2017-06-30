<?php
/**
 * 
 */
$pagina = "home";
$accion = "ver";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    include "./home/modelo/pdf.php";
    include "./home/vista/pdf.php";
} else {
    include "./home/vista/pdf_sin_permiso.php";
    
    permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
    
    
}