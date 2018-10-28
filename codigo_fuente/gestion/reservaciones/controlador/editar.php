 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "reservaciones"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $reservaciones_id = mysql_real_escape_string($_REQUEST['reservaciones_id']);      
 include "./reservaciones/reg/post.php";  
 include "./reservaciones/modelos/editar.php";  

 include "./reservaciones/modelos/ver.php";  
 include "./reservaciones/reg/reg.php"; 
 include "./reservaciones/vista/ver.php";  
 }else{ 
 $reservaciones_id = mysql_real_escape_string($_REQUEST['reservaciones_id']);      
 include "./reservaciones/modelos/ver.php"; 
 include "./reservaciones/reg/reg.php"; 
 include "./reservaciones/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",       
                    "$reservaciones_id"=>"$reservaciones_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }