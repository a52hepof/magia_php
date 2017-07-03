 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$sql=mysql_query( 
 "SELECT * FROM logs WHERE id = '$logs_id' ORDER BY id DESC   ",$conexion) 	  
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 $logs = mysql_fetch_array($sql);	  
