<?php
if (_usuarios_campo_segun_email("estatus", $clientes_email)) {
    $t_usuarios_estatus_icono = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
} else {
    $t_usuarios_estatus_icono = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
}



if (clientes_tiene_login($clientes_email)) {
    // $clientes_tiene_login = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
    $clientes_tiene_login = _tr("Si");
} else {
    //$clientes_tiene_login = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
    $clientes_tiene_login = (permisos_tiene_permiso('crear', $p, $_usuarios_grupo)) ?
            "<a href=\"index.php?p=_usuarios&c=crear\">" . _tr('No, crear uno.') . "</a>" : "No";
}

$candado = (!$clientes_estatus) ? '<span class="glyphicon glyphicon-ban-circle"></span>' : '';



echo ' 
<tr>
 
 <td><img src="../imagenes/usuario.jpg">' . $candado . ' ' . $clientes_empresa . '</td> 
 <td>' . $clientes_cliente . '</td> '; 
 //echo '<td>' . pedidos_segun_email($clientes_email) . '</td> '; 
 
 echo '<td>' . $clientes_ciudad . '</td> 
 <td><a href="mailto:'.$clientes_email.'">' . $clientes_email . '</a></td> 
 <td>' . ucfirst(_usuarios_campo_segun_email("grupo", $clientes_email)) . '</td> 
 <td>
    <a href=' . $_SERVER['PHP_SELF'] . '?p=clientes&c=ver&clientes_id=' . $clientes_id . '>'._tr('Ver').'</a> |  
    <a href=' . $_SERVER['PHP_SELF'] . '?p=clientes&c=editar&clientes_id=' . $clientes_id . '>'._tr('Editar').'</a>                        
</td>     

 </tr>';

