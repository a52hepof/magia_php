 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "autos"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $autos_id 		= mysql_real_escape_string($_REQUEST['autos_id']);   
     include "./autos/modelos/ver.php"; 
     include "./autos/reg/reg.php"; 
     include "./autos/vista/data.php"; 
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
                    "\$autos_id"=>"$autos_id",
                    "\$inicia"=>"$inicia"
                    
                    
                       
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }