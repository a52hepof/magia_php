 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _menu  
 WHERE  
 ubicacion like '%$_menu_ubicacion%'    
 AND  padre like '%$_menu_padre%'    
 AND  label like '%$_menu_label%'    
 AND  url like '%$_menu_url%'    
 AND  icono like '%$_menu_icono%'    
 AND  orden like '%$_menu_orden%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
