 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM _traducciones  
 WHERE  
 frase like '%$_traducciones_frase%'    
 AND  idioma like '%$_traducciones_idioma%'    
 AND  traduccion like '%$_traducciones_traduccion%'    
 ORDER BY id DESC    
 ",$conexion) or die ("Error:".mysql_error());  
