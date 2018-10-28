<?php
$body  = "";
$body .= "<p>" . _tr("Estimado/a") . ", $_contactos_contacto ($_contactos_email)</p>";
$body .= "<p>" . _tr("El administrador ha activado su cuenta en") . ": $config_nombre_web</p>";
$body .= "<p>" . _tr("Ya puede realizar pedidos") . "</p>";
$body .= "<p>" . _tr("Usuario") . ":  $_contactos_email</p>";

$body .= "<p>". _tr('Atentamente').",</p>";
$body .= "<h2>$config_nombre_web</h2>";
$body .= "<p>$config_direccion</p>";
$body .= "<p>$config_tel</p>";
