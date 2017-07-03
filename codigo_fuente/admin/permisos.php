<?php 
/**
 * 
 * @global type $conexion
 * @param type $p
 * @param type $g
 * @return type
 */
function permisos_obtiene_permiso($p,$g){
    global $conexion;
$sql=mysql_query( 
 "SELECT permiso  FROM _permisos WHERE grupo = '$g' and pagina = '$p'  ",$conexion);
 $reg = mysql_fetch_array($sql);	   
 return $reg[0];
}


/**
 * 
 * @param string $accion
 * @param type $pagina
 * @param type $grupo
 * @return boolean
 */
function permisos_tiene_permiso($accion, $pagina, $grupo){
    global $r1, $r2;
if($accion=='buscar'){$accion = 'ver';}
    $p = permisos_obtiene_permiso($pagina,$grupo);    
    $ver     = $p[0];
    $crear   = $p[1];
    $editar  = $p[2];
    $borrar  = $p[3];
    
    switch ($accion) {
        case "ver":
            //return ($ver == 1)? true:false; 
            return ($ver && m($r1,$r2) )? true:false; 
            break;
        
        case "crear":
            return ($crear && m($r1,$r2))? true:false; 
            break;
        
        case "editar":
            return ($editar && m($r1,$r2))? true:false; 
            break;
        
        case "borrar":
            return ($borrar && m($r1,$r2))? true:false; 
            break;

        default: // por defecto enviamos falso
            return false;    
            break;
    }                
}
/**
 * 
 * @param type $accion
 * @param type $pagina
 * @param type $u_login
 */
function permisos_sin_permiso($accion, $pagina, $u_login){
    global $r1, $r2;
    x();
    (!x())?sms(EL):'';
    mensaje('info', "sin permiso");
    
    echo '<div class="list-group">
  <a href="#" class="list-group-item disabled">
    '._tr('Detalles').'
  </a>
  <a href="#" class="list-group-item">'._tr('Usuario').': '.$u_login.'</a>
  <a href="#" class="list-group-item">'._tr('Página').': '.$pagina.'</a>
  <a href="#" class="list-group-item">'._tr('Acción').': '.$accion.'</a>
 
</div>'; 
    
   
    
}


