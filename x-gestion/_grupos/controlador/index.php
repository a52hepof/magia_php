 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "ver"; 
 $pagina = "_grupos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
    
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    // ordenamos por id por defecto 
    $ordenpor   = (isset($_REQUEST['ordenpor']) && $_REQUEST['ordenpor'] != '' ) ? $_REQUEST['ordenpor']  : 'id';
    //asc / desc
    $orden   = (isset($_REQUEST['orden']) && $_REQUEST['orden'] != '' ) ? $_REQUEST['orden']  : 'ASC';
    
     
     include "./_grupos/modelos/index.php"; 
     include "./_grupos/vista/index.php"; 
     logs_historico($p,$c,false);
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
