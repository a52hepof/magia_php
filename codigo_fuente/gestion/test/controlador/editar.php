 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $accion = "editar"; 
 $pagina = "test"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $test_id = mysql_real_escape_string($_REQUEST['test_id']);      
 include "./test/reg/post.php";  
 include "./test/modelos/editar.php";  

 include "./test/modelos/ver.php";  
 include "./test/reg/reg.php"; 
 include "./test/vista/ver.php";  
 }else{ 
 $test_id = mysql_real_escape_string($_REQUEST['test_id']);      
 include "./test/modelos/ver.php"; 
 include "./test/reg/reg.php"; 
 include "./test/vista/editar.php"; 
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
                    "$test_id"=>"$test_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }