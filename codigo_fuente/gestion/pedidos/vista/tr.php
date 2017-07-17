<?php

$menu = '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    ' . pedidos_estatus_icono($pedidos_estatus) . ' ' . _tr(pedidos_estatus($pedidos_estatus)) . '
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=pedidos&c=ver&pedidos_id=' . $pedidos_id . '&a=false><span class="glyphicon glyphicon-eye-open"></span> ' . _tr("Ver") . '</a></li>
    <li><a href=' . $_SERVER['PHP_SELF'] . '?p=pedidos&c=editar&pedidos_id=' . $pedidos_id . '&a=false><span class="glyphicon glyphicon-pencil"></span> ' . _tr("Editar") . '</a> </li>   
    <li role="separator" class="divider"></li>
    

    ';

foreach (pedidos_estatus() as $codigo => $estatus) {
    $menu .= '<li><a href="index.php?p=pedidos&c=cambiar_estatus&a=cambiar_estatus&estatus=' . $codigo . '&pedidos_id=' . $pedidos_id . '&a=false">' . pedidos_estatus_icono($codigo) . ' ' . _tr("$estatus") . '</a></li>';
}

echo '
  </ul>
</div>';



$estatus = pedidos_estatus($pedidos_estatus);



echo ' <tr>
    <td>' . $i . ' </td> 
 <td><span style="color:red">' . pedidos_id_formateado($pedidos_id) . '<span></td> 
 
 
 <td>' . $pedidos_empresa . '</td> 
 <td>' . $pedidos_contacto . '<br>(' . $pedidos_email . ')</td> 
 <td>' . $pedidos_fecha . '</td> 
 
 
 <td>' . $x = (permisos_tiene_permiso("editar", "pedidos_estatus", $_usuarios_grupo)) ? $menu : "<a href=\"index.php?p=pedidos&c=ver&pedidos_id=$pedidos_id\">$estatus</a>" . '</td> 
</tr>';
