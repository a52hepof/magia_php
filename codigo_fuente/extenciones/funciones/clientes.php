<?php

/**
  magia_version: 0.0.8
 * */
function clientes_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM clientes WHERE id = $id   ", $conexion) or die("Error: clientes_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function clientes_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($clientes = mysql_fetch_array($sql)) {
        //include "../gestion/clientes/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $clientes[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $clientes[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$clientes[$campo]\">$clientes[$campo]</option> \n";
    }
}

function clientes_add($selecionado = "", $excluir = "") {
    global $conexion, $_usuarios_usuario, $_usuarios_grupo;
    
    // grupo segun usuario 
    
    // si ese grupo puede crear pedidos_otros 
    if(permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)){
        $sql = mysql_query("SELECT * FROM clientes ORDER BY estatus DESC, empresa ", $conexion);
    }else{
        $sql = mysql_query("SELECT * FROM clientes WHERE email = '$_usuarios_usuario' ", $conexion);
    }
    // sino 
    
    while ($clientes = mysql_fetch_array($sql)) {

        include "../gestion/clientes/reg/reg.php";

        echo "<option ";
        if ($selecionado == $clientes['email']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $clientes[0] || $clientes['estatus'] == 0) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$clientes[0]\">$clientes[0]</option>";
        echo "value=\"$clientes[email]\">$clientes[empresa] - $clientes[cliente] ($clientes[email])</option>";
    }
}

function clientes_sin_usuario_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM clientes  ", $conexion) or die("Error:" . mysql_error());
    while ($clientes = mysql_fetch_array($sql)) {
        include "../gestion/clientes/reg/reg.php";

        if (!clientes_tiene_login($clientes['email']) && $clientes['email']) {
            echo "<option value=\"$clientes[email]\">$clientes[empresa] - $clientes[cliente] - $clientes[email]</option>";
        } // fi tiene login 
    }
}

function clientes_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM clientes   ", $conexion) or die("Error: clientes_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Verifica si el email del cliente esta presente en la tabla de _usuarios; si es asi me entrega su id
 * sino me entrega falso
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 */
function clientes_tiene_login($email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM _usuarios WHERE usuario = '$email'   ", $conexion)
            or die("Error: clientes_tiene_login()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function clientes_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM clientes WHERE email = '$email'   ", $conexion) or die("Error: clientes_campo_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);



    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}
