 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "reserva_estatus"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $reserva_estatus_id = mysql_real_escape_string($_REQUEST['reserva_estatus_id']);      
 include "./reserva_estatus/reg/post.php";  
 include "./reserva_estatus/modelos/editar.php";  

 include "./reserva_estatus/modelos/ver.php";  
 include "./reserva_estatus/reg/reg.php"; 
 include "./reserva_estatus/vista/ver.php";  
 }else{ 
 $reserva_estatus_id = mysql_real_escape_string($_REQUEST['reserva_estatus_id']);      
 include "./reserva_estatus/modelos/ver.php"; 
 include "./reserva_estatus/reg/reg.php"; 
 include "./reserva_estatus/vista/editar.php"; 
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
                    "$reserva_estatus_id"=>"$reserva_estatus_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }