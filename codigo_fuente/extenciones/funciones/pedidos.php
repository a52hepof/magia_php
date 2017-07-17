<?php

/**
  magia_version: 0.0.8
 * */
function pedidos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM pedidos WHERE id = $id   ", $conexion) or die("Error: pedidos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function pedidos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($pedidos = mysql_fetch_array($sql)) {
        //include "../gestion/pedidos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $pedidos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $pedidos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$pedidos[$campo]\">$pedidos[$campo]</option> \n";
    }
}

function pedidos_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM pedidos  ", $conexion) or die("Error:" . mysql_error());
    while ($pedidos = mysql_fetch_array($sql)) {

        include "../gestion/pedidos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $pedidos[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $pedidos[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$pedidos[0]\">$pedidos[0]</option>";
        echo "value=\"$pedidos[0]\">$pedidos_pedidos</option>";
    }
}

function pedidos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM pedidos   ", $conexion) or die("Error: pedidos_numero_actual()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function pedidos_id_formateado($id) {
    global $config_ceros_bon;

    return $id_formateado = str_pad($id, $config_ceros_bon, "0", STR_PAD_LEFT);
}

/**
 * Entrega el total de pedidos segun email
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 */
function pedidos_segun_email($email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT count(*) FROM pedidos WHERE email = '$email'   ", $conexion) or die("Error: pedidos_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
function pedidos_total_segun_estatus($estatus) {
    global $conexion, $_usuarios_grupo,$_usuarios_usuario;
    
    
    
    $filtro_estatus = ( $estatus == 'todos' )?" estatus > '-9999999999' ":" estatus = '$estatus' ";
        
    
    // si puedo ver los otros esto 
    if(permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)){
        $sql = mysql_query("SELECT count(*) FROM pedidos WHERE $filtro_estatus   ", $conexion) or die("Error: pedidos_total_segun_estatus()" . mysql_error());    
    }else{
        $sql = mysql_query("SELECT count(*) FROM pedidos WHERE $filtro_estatus AND email = '$_usuarios_usuario'   ", $conexion) or die("Error: pedidos_total_segun_estatus()" . mysql_error());    
    }

    
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function pedidos_segun_email_estatus($email, $estatus) {
    global $conexion, $_usuarios_grupo;

    // si este grupo puede ver los pedidos otros 
    if (permisos_tiene_permiso('ver', 'pedidos_otros', $_usuarios_grupo)) {
        $sql = mysql_query("SELECT count(*) FROM pedidos WHERE estatus = '$estatus'   ", $conexion) ;
        $reg = mysql_fetch_array($sql);
    } else {
        if($estatus=='todos'){
              //SEGUN ESTATUS
        $sql = mysql_query("SELECT count(*) FROM pedidos WHERE email = '$email'   ", $conexion) ;
        $reg = mysql_fetch_array($sql);
        }else{
            // TOOS
        $sql = mysql_query("SELECT count(*) FROM pedidos WHERE email = '$email' AND estatus = '$estatus'    ", $conexion);
        $reg = mysql_fetch_array($sql);            
        }
    }

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * Con parametro entrega el estatus en letras
 * sin parametro entrega el array de parametros
 * @param type $codigo
 * @return string
 */
function pedidos_estatus($codigo=false) {


    $estatus = array(
        //0 => "Borrador",
        1 => "Registrado",
        2 => "En proceso",
        3 => "Enviado",
        -1 => "Borrado");
    
    if ($codigo >= '-1') {
        return $estatus[$codigo];
    } else {
        return $estatus;
    }
}

function pedidos_estatus_icono($codigo) {
    $iconos = array(
       // 0 => "<span class=\"glyphicon glyphicon-hourglass\"></span>",
        1 => "<span class=\"glyphicon glyphicon-shopping-cart\"></span>",
        2 => "<span class=\"glyphicon glyphicon-cog\"></span>",
        3 => "<span class=\"glyphicon glyphicon-send\"></span>",
        -1 => "<span class=\"glyphicon glyphicon-trash\"></span>"
    );

    return $iconos[$codigo];
}

function pedidos_estatus_add($seleccionado="") {
    global $conexion;

    $estatus = pedidos_estatus();


    foreach ($estatus as $key => $value) {

        echo "<option ";
        if ($seleccionado == $key) {
            echo ' selected="" ';
        }
        echo " value=\"$key\">" . _tr($value) . "</option> \n";
    }
}

function pedidos_menu_segun_estatus() {

    global $_usuarios_usuario;
    
    $pedidos_estatus = pedidos_estatus();

    echo '<ul class="nav nav-tabs" role="tablist">';
    
       echo '<li role="presentation "><a href="index.php?p=pedidos&c=index">                    ' . _tr('Todos') . ' ' . pedidos_total_segun_estatus('todos') . '</a></li>';

    foreach ($pedidos_estatus as $codigo => $estatus) {
        $badge = ($codigo==1)?" badge ":" ";
        echo '<li role="presentation" ><a href="index.php?p=pedidos&c=buscar_segun_estatus&estatus=' . $codigo . '">' . pedidos_estatus_icono($codigo) . ' ' . _tr($estatus) . ' <span class="'.$badge.'">' . pedidos_total_segun_estatus($codigo) . ' </span></a></li>';
    }



    echo '</ul>';
}

function pedidos_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM pedidos WHERE email = '$email'  ", $conexion) 
            or die("Error: pedidos_campo_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
function pedidos_campo_segun_ref($campo, $ref) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM pedidos WHERE ref = '$ref'  ", $conexion) or die("Error: pedidos_campo_segun_ref()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
