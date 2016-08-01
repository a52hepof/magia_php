<?php
    $sql=mysql_query(   
         "DESCRIBE bienes  ",$conexion);
     $reg = mysql_fetch_array($sql);	

     