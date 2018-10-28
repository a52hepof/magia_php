<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "reservaciones"=>[ "id"=>"$reservaciones_id",  
 "id_parking"=>"$reservaciones_id_parking",  
 "placa"=>"$reservaciones_placa",  
 "fecha_i"=>"$reservaciones_fecha_i",  
 "hora_i"=>"$reservaciones_hora_i",  
 "id_estatus"=>"$reservaciones_id_estatus",  
                ]
        ];  $html = str_replace('%reservaciones_id%',       $datos['reservaciones']['id'], $html); 
  $html = str_replace('%reservaciones_id_parking%',       $datos['reservaciones']['id_parking'], $html); 
  $html = str_replace('%reservaciones_placa%',       $datos['reservaciones']['placa'], $html); 
  $html = str_replace('%reservaciones_fecha_i%',       $datos['reservaciones']['fecha_i'], $html); 
  $html = str_replace('%reservaciones_hora_i%',       $datos['reservaciones']['hora_i'], $html); 
  $html = str_replace('%reservaciones_id_estatus%',       $datos['reservaciones']['id_estatus'], $html); 
