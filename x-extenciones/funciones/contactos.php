<?php

/**
  magia_version: 0.0.8
 * */
function contactos_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _contactos WHERE id = $id   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function contactos_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion)
            or die("Error:" . mysql_error());
    while ($_contactos = mysql_fetch_array($sql)) {
        //include "../gestion/_contactos/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $_contactos[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contactos[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$_contactos[$campo]\">$_contactos[$campo]</option> \n";
    }
}

function contactos_add($selecionado = "", $excluir = "") {
    global $conexion, $_usuarios_usuario, $_usuarios_grupo;

    // grupo segun usuario 
    // si ese grupo puede crear pedidos_otros 
    if (permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)) {
        $sql = mysql_query("SELECT * FROM _contactos ORDER BY estatus DESC, empresa ", $conexion);
    } else {
        $sql = mysql_query("SELECT * FROM _contactos WHERE email = '$_usuarios_usuario' ", $conexion);
    }
    // sino 

    while ($_contactos = mysql_fetch_array($sql)) {

        include "../gestion/_contactos/reg/reg.php";

        echo "<option ";
        if ($selecionado == $_contactos['email']) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $_contactos[0] || $_contactos['estatus'] == 0) {
            echo " disabled ";
        } else {
            echo "";
        }
        //echo "value=\"$_contactos[0]\">$_contactos[0]</option>";
        echo "value=\"$_contactos[email]\">" . strtoupper($_contactos['empresa']) . " - $_contactos[contacto] ($_contactos[email])</option>";
    }
}

function contactos_sin_usuario_add($selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT * FROM _contactos  ", $conexion) or die("Error:" . mysql_error());
    while ($_contactos = mysql_fetch_array($sql)) {
        include "../gestion/_contactos/reg/reg.php";

        if (!contactos_tiene_login($_contactos['email']) && $_contactos['email']) {
            echo "<option value=\"$_contactos[email]\">$_contactos[empresa] - $_contactos[contacto] - $_contactos[email]</option>";
        } // fi tiene login 
    }
}

function contactos_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM _contactos   ", $conexion) or die("Error: contactos_campo()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

/**
 * Verifica si el email del contacto esta presente en la tabla de _usuarios; si es asi me entrega su id
 * sino me entrega falso
 * @global type $conexion
 * @param type $campo
 * @param type $id
 * @return boolean
 */
function contactos_tiene_login($email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT id FROM _usuarios WHERE usuario = '$email'   ", $conexion)
            or die("Error: contactos_tiene_login()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}

function contactos_campo_segun_email($campo, $email) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM _contactos WHERE email = '$email'   ", $conexion)
            or die("Error: contactos_campo_segun_email()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[$campo]) {
        return $reg[$campo];
    } else {
        return false;
    }
}

function contactos_tabla_index_titulo($orden) {

    $columnas_disponibles = array(
        "ciudad",
        "email",
        "idioma",
        "grupo",
        "acción"
    );

    if (strtoupper($orden) == "ASC") {
        $ad = "DESC";
        $icono = '<span class="glyphicon glyphicon-triangle-bottom"><span>';
    } else {
        $ad = "ASC";
        $icono = '<span class="glyphicon glyphicon-triangle-top"><span>';
    }

    echo "      
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=empresa&orden=$ad\">" . _tr("Empresa") . "</a> $icono</th> 
                <th><a href=\"index.php?p=contactos&c=index&ordenpor=contacto&orden=$ad\">" . _tr("Contacto") . "</a> $icono</th>";

    // echo "<th><span class=\"glyphicon glyphicon-" . _menu_icono_segun_pagina('pedidos') . " \"></span></th>";

    foreach ($columnas_disponibles as $value) {

        echo '<th> ' . _tr(ucfirst($value)) . '</th> ';
    }
}

function contactos_total_segun_estatus($estatus) {
    global $conexion;
    $sql = mysql_query(
            "SELECT COUNT(id) FROM _contactos WHERE estatus = '$estatus'   ", $conexion) or die("Error: contactos_total_segun_estatus()" . mysql_error());
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}
/**
 * Entrega el idioma del usuario, si no tiene entrega el idioma por defecto del sistema
 * @global type $conexion
 * @return boolean
 */
function contactos_idioma($email) {
    global $config_idioma;
    return (contactos_campo_segun_email('idioma', $email))?contactos_campo_segun_email('idioma', $email):$config_idioma;
}