<?php

/**
  magia_version: 0.0.8
 * */
$sql = "INSERT INTO _usuarios ( 
    
 grupo  ,  usuario  ,  clave  ,  estatus   
 
) VALUES ( 
 
 :grupo  ,  :usuario  ,  :clave  ,  :estatus  )";

$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":grupo" => "$clientes_grupo",
    ":usuario" => "$clientes_email",
    ":clave" => codifica_clave($clientes_clave),
    ":estatus" => "1"
        )
);
