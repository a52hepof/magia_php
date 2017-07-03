<?php

/**
  magia_version: 0.0.8
 * */
$sql = "INSERT INTO clientes ( 
    
 idioma, tipo_documento  ,  ruc_prefijo  ,  numero_documento  ,  empresa  ,  cliente  ,  
 saludo  ,  direccion  ,  cpostal  ,  ciudad  ,  provincia  ,  pais  ,  tel  ,  fax  ,  
 email  ,  notas  , estatus  
 
) VALUES ( 
 
 :idioma, :tipo_documento  ,  :ruc_prefijo  ,  :numero_documento  ,  :empresa  ,  :cliente  ,  
 :saludo  ,  :direccion  ,  :cpostal  ,  :ciudad  ,  :provincia  ,  :pais  ,  :tel  ,  :fax  ,  
 :email  ,  :notas  ,  :estatus    )";

$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":idioma" => "$clientes_idioma",
    ":tipo_documento" => "$clientes_tipo_documento",
    ":ruc_prefijo" => "$clientes_ruc_prefijo",
    ":numero_documento" => "$clientes_numero_documento",
    ":empresa" => "$clientes_empresa",
    ":cliente" => "$clientes_cliente",
    ":saludo" => "$clientes_saludo",
    ":direccion" => "$clientes_direccion",
    ":cpostal" => "$clientes_cpostal",
    ":ciudad" => "$clientes_ciudad",
    ":provincia" => "$clientes_provincia",
    ":pais" => "$clientes_pais",
    ":tel" => "$clientes_tel",
    ":fax" => "$clientes_fax",
    ":email" => "$clientes_email",
    ":notas" => "$clientes_notas",
    ":estatus" => "1"
        )
);