<?php

/**
  magia_version: 0.0.11
 * */

switch ($autos_estatus) {
    case 0:
        $candado = '<span class="glyphicon glyphicon-ban-circle"></span>';
        break;
    case 1:
        $candado = '';
        break;
    case -1:
        $candado = '<span class="glyphicon glyphicon-trash"></span>';
        break;

    default:
        break;
}


$menu = '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="autos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    ' . _tr("Acción") . '
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="autos">
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=autos&c=ver&autos_id=' . $autos_id . '>' . _tr("Ver") . '</a></li>
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=autos&c=editar&autos_id=' . $autos_id . '>' . _tr("Editar") . '</a> </li>    
  </ul>
</div>';


echo '<tr>';

echo '<td>'.$candado.'' . $autos_placa . '</td> ';
echo '<td>' . contactos_campo("contacto", $autos_id_contacto) . '</td> ';
echo '<td>' . $autos_estatus . '</td> ';
echo '<td>' . $menu . '</td> ';
echo '</tr>';
