<?php 
 /**  
 magia_version: 0.0.11 
 **/
$menu = '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="parkings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    '._tr("Acción").'
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="parkings">
    <li><a href='.$_SERVER['PHP_SELF'].'?p=parkings&c=ver&parkings_id='.$parkings_id.'>'._tr("Ver").'</a></li>
    <li><a href='.$_SERVER['PHP_SELF'].'?p=parkings&c=editar&parkings_id='.$parkings_id.'>'._tr("Editar").'</a> </li>    
  </ul>
</div>';     
 echo '<tr>';  
 echo '<td>' . $i . '</td> ';  
 echo '<td>'.$parkings_id_contacto.'</td> '; 
 echo '<td>'.$parkings_direccion.'</td> '; 
 echo '<td>'.$parkings_numero.'</td> '; 
 echo '<td>'.$parkings_cpostal.'</td> '; 
 echo '<td>'.$parkings_barrio.'</td> '; 
 echo '<td>'.$parkings_comuna.'</td> '; 
 echo '<td>'.$parkings_ciudad.'</td> '; 
 echo '<td>'.$parkings_pais.'</td> '; 
 echo '<td>'.$parkings_precio_hora.'</td> '; 
 echo '<td>'.$parkings_orden.'</td> '; 
 echo '<td>'.$parkings_estatus.'</td> '; 
 echo '<td>' . $menu . '</td> '; 
 echo '</tr>';  
