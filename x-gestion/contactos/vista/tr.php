<?php
if (_usuarios_campo_segun_email("estatus", $_contactos_email)) {
    $t_usuarios_estatus_icono = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
} else {
    $t_usuarios_estatus_icono = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
}



if (contactos_tiene_login($_contactos_email)) {
    // $_contactos_tiene_login = '<span style="color:blue"><span class="glyphicon glyphicon-ok-circle"></span>';
    $_contactos_tiene_login = _tr("Si");
} else {
    //$_contactos_tiene_login = '<span style="color:red"><span class="glyphicon glyphicon-ban-circle"></span>';
    $_contactos_tiene_login = (permisos_tiene_permiso('crear', $p, $_usuarios_grupo)) ?
            "<a href=\"index.php?p=_usuarios&c=crear\">" . _tr('No, crear uno.') . "</a>" : "No";
}

$candado = (!$_contactos_estatus) ? '<span class="glyphicon glyphicon-ban-circle"></span>' : '';


switch ($_contactos_estatus) {
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





echo ' 
<tr>
 
 <td><img src="../imagenes/usuario.jpg">' . $candado . ' ' . $_contactos_empresa . '</td> 
 <td>' . $_contactos_contacto . '</td> '; 
 //echo '<td>' . pedidos_segun_email($_contactos_email) . '</td> '; 
 
 echo '<td>' . $_contactos_ciudad . '</td> 
 <td><a href="mailto:'.$_contactos_email.'">' . $_contactos_email . '</a></td> 
 <td>'.$_contactos_idioma.'</td> 
 <td>' . ucfirst(_usuarios_campo_segun_email("grupo", $_contactos_email)) . '</td> 
 <td>
    <a href=' . $_SERVER['PHP_SELF'] . '?p=contactos&c=ver&contactos_id=' . $_contactos_id . '>'._tr('Ver').'</a> |  
    <a href=' . $_SERVER['PHP_SELF'] . '?p=contactos&c=editar&contactos_id=' . $_contactos_id . '>'._tr('Editar').'</a>                        
</td>     

 </tr>';