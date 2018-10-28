<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "reserva_estatus"=>[ "id"=>"$reserva_estatus_id",  
 "codigo"=>"$reserva_estatus_codigo",  
 "estatus"=>"$reserva_estatus_estatus",  
 "orden"=>"$reserva_estatus_orden",  
                ]
        ];  $html = str_replace('%reserva_estatus_id%',       $datos['reserva_estatus']['id'], $html); 
  $html = str_replace('%reserva_estatus_codigo%',       $datos['reserva_estatus']['codigo'], $html); 
  $html = str_replace('%reserva_estatus_estatus%',       $datos['reserva_estatus']['estatus'], $html); 
  $html = str_replace('%reserva_estatus_orden%',       $datos['reserva_estatus']['orden'], $html); 
