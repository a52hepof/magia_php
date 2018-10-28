<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "parkings"=>[ "id"=>"$parkings_id",  
 "id_contacto"=>"$parkings_id_contacto",  
 "direccion"=>"$parkings_direccion",  
 "numero"=>"$parkings_numero",  
 "cpostal"=>"$parkings_cpostal",  
 "barrio"=>"$parkings_barrio",  
 "comuna"=>"$parkings_comuna",  
 "ciudad"=>"$parkings_ciudad",  
 "pais"=>"$parkings_pais",  
 "precio_hora"=>"$parkings_precio_hora",  
 "orden"=>"$parkings_orden",  
 "estatus"=>"$parkings_estatus",  
                ]
        ];  $html = str_replace('%parkings_id%',       $datos['parkings']['id'], $html); 
  $html = str_replace('%parkings_id_contacto%',       $datos['parkings']['id_contacto'], $html); 
  $html = str_replace('%parkings_direccion%',       $datos['parkings']['direccion'], $html); 
  $html = str_replace('%parkings_numero%',       $datos['parkings']['numero'], $html); 
  $html = str_replace('%parkings_cpostal%',       $datos['parkings']['cpostal'], $html); 
  $html = str_replace('%parkings_barrio%',       $datos['parkings']['barrio'], $html); 
  $html = str_replace('%parkings_comuna%',       $datos['parkings']['comuna'], $html); 
  $html = str_replace('%parkings_ciudad%',       $datos['parkings']['ciudad'], $html); 
  $html = str_replace('%parkings_pais%',       $datos['parkings']['pais'], $html); 
  $html = str_replace('%parkings_precio_hora%',       $datos['parkings']['precio_hora'], $html); 
  $html = str_replace('%parkings_orden%',       $datos['parkings']['orden'], $html); 
  $html = str_replace('%parkings_estatus%',       $datos['parkings']['estatus'], $html); 
