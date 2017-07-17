<?php 
 /**  
 magia_version: 0.0.8 
 **/ 
  
 $datos= [
            "test"=>[ "id"=>"$test_id",  
 "nombre"=>"$test_nombre",  
 "apellidos"=>"$test_apellidos",  
                ]
        ];  $html = str_replace('%test_id%',       $datos['test']['id'], $html); 
  $html = str_replace('%test_nombre%',       $datos['test']['nombre'], $html); 
  $html = str_replace('%test_apellidos%',       $datos['test']['apellidos'], $html); 
