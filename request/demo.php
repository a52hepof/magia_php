<?php
    $sql=mysql_query(   
         "SELECT 
  TABLE_NAME,COLUMN_NAME,CONSTRAINT_NAME, REFERENCED_TABLE_NAME,REFERENCED_COLUMN_NAME
FROM
  INFORMATION_SCHEMA.KEY_COLUMN_USAGE
WHERE
  REFERENCED_TABLE_SCHEMA = '_premisos' AND
  REFERENCED_TABLE_NAME = 'grupo';
  
  ;",$conexion);
    
     $reg = mysql_fetch_array($sql);	

     