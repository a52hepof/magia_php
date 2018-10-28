 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "reservaciones"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $reservaciones_id 		= mysql_real_escape_string($_REQUEST['reservaciones_id']);   
     include "./reservaciones/modelos/ver.php"; 
     include "./reservaciones/reg/reg.php"; 
     include "./reservaciones/vista/data.php"; 
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
                    "\$reservaciones_id"=>"$reservaciones_id",
                    "\$inicia"=>"$inicia"
                    
                    
                       
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }