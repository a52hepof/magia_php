<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "logs"=>[ "id"=>"$logs_id",  
 "fecha"=>"$logs_fecha",  
 "usuario"=>"$logs_usuario",  
 "p"=>"$logs_p",  
 "c"=>"$logs_c",  
 "a"=>"$logs_a",  
 "id_pedido"=>"$logs_id_pedido",  
 "argumento"=>"$logs_argumento",  
                ]
        ];  $html = str_replace('%logs_id%',       $datos['logs']['id'], $html); 
  $html = str_replace('%logs_fecha%',       $datos['logs']['fecha'], $html); 
  $html = str_replace('%logs_usuario%',       $datos['logs']['usuario'], $html); 
  $html = str_replace('%logs_p%',       $datos['logs']['p'], $html); 
  $html = str_replace('%logs_c%',       $datos['logs']['c'], $html); 
  $html = str_replace('%logs_a%',       $datos['logs']['a'], $html); 
  $html = str_replace('%logs_id_pedido%',       $datos['logs']['id_pedido'], $html); 
  $html = str_replace('%logs_argumento%',       $datos['logs']['argumento'], $html); 
