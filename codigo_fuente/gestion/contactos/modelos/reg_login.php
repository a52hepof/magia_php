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
    ":grupo" => "$_contactos_grupo",
    ":usuario" => "$_contactos_email",
    ":clave" => $_contactos_clave,
    ":estatus" => "$_contactos_estatus"
   )
);
