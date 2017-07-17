 <?php 
 /**  
 magia_version: 0.0.8 
 **/ 
$sql=mysql_query( 
        
 "SELECT * FROM pedidos WHERE id = '$pedidos_id'  ORDER BY id DESC   ",$conexion) 
        
 or die ("Error: en el fichero:" .__FILE__ .' linea: '. __LINE__ .' / '.mysql_error());	
 
$pedidos = mysql_fetch_array($sql);	

// DEBUG MODE
vardump($pedidos,array('$pedidos = mysql_fetch_array($sql);',__FILE__));
