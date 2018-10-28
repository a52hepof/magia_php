<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "autos"=>[ "id"=>"$autos_id",  
 "placa"=>"$autos_placa",  
 "id_contacto"=>"$autos_id_contacto",  
 "estatus"=>"$autos_estatus",  
                ]
        ];  $html = str_replace('%autos_id%',       $datos['autos']['id'], $html); 
  $html = str_replace('%autos_placa%',       $datos['autos']['placa'], $html); 
  $html = str_replace('%autos_id_contacto%',       $datos['autos']['id_contacto'], $html); 
  $html = str_replace('%autos_estatus%',       $datos['autos']['estatus'], $html); 
