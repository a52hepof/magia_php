 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "reserva_estatus"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $reserva_estatus_id 		= mysql_real_escape_string($_REQUEST['reserva_estatus_id']);   
     include "./reserva_estatus/modelos/ver.php"; 
     include "./reserva_estatus/reg/reg.php"; 
     include "./reserva_estatus/vista/data.php"; 
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
                    "\$reserva_estatus_id"=>"$reserva_estatus_id",
                    "\$inicia"=>"$inicia"
                    
                    
                       
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }