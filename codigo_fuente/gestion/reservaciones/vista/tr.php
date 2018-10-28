<?php

/**
  magia_version: 0.0.11
 * */

//$r = ($reservaciones_hora_i/3600);
        
$menu = '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="reservaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    ' . _tr("Acción") . '
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="reservaciones">
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=reservaciones&c=ver&reservaciones_id=' . $reservaciones_id . '>' . _tr("Ver") . '</a></li>
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=reservaciones&c=editar&reservaciones_id=' . $reservaciones_id . '>' . _tr("Editar") . '</a> </li>    
  </ul>
</div>';


echo '<tr>';


echo '<td>'.parkings_campo("numero", $reservaciones_id_parking).', ' . parkings_campo("direccion", $reservaciones_id_parking) .'</td> ';
echo '<td>' . $reservaciones_placa . '</td> ';
echo '<td>' . $reservaciones_fecha_i . '</td> ';
echo '<td class="text-right">' . $reservaciones_hora_i . ' H</td> ';
echo '<td class="text-right">' . $reservaciones_hora_f . ' H</td> ';
echo '<td>' . _tr(reserva_estatus_campo('estatus', $reservaciones_id_estatus)) . '</td> ';
echo '<td>' . $menu . '</td> ';
echo '</tr>';
