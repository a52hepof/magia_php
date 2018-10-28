<?php 
 /**  
 magia_version: 0.0.11 
 **/
$menu = '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="reserva_estatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    '._tr("Acción").'
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="reserva_estatus">
    <li><a href='.$_SERVER['PHP_SELF'].'?p=reserva_estatus&c=ver&reserva_estatus_id='.$reserva_estatus_id.'>'._tr("Ver").'</a></li>
    <li><a href='.$_SERVER['PHP_SELF'].'?p=reserva_estatus&c=editar&reserva_estatus_id='.$reserva_estatus_id.'>'._tr("Editar").'</a> </li>    
  </ul>
</div>';     
 echo '<tr>';  
 echo '<td>' . $i . '</td> ';  
 echo '<td>'.$reserva_estatus_codigo.'</td> '; 
 echo '<td>'.$reserva_estatus_estatus.'</td> '; 
 echo '<td>'.$reserva_estatus_orden.'</td> '; 
 echo '<td>' . $menu . '</td> '; 
 echo '</tr>';  
