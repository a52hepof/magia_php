<?php 
function permisos_obtiene_permiso($p,$g){
    global $conexion;
$sql=mysql_query( 
 "SELECT permiso  FROM _permisos WHERE grupo = '$g' and pagina = '$p'  ",$conexion);
 $reg = mysql_fetch_array($sql);	   
 return $reg[0];
}



function permisos_tiene_permiso($accion, $pagina, $grupo){  

if($accion=='buscar'){$accion = 'ver';}


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

function permisos_sin_permiso($accion, $pagina, $u_login){
    
    echo "Estimado $u_login, ud no puede realizar la accion [$accion] en la pagina [$pagina]"; 
    
}


