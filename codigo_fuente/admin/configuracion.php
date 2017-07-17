<?php
// DATOS DE LA EMPRESA
$path_imagenes = "/var/www/html/audio/imagenes";
$config_debug = 0; 
$config_nombre_web = "JIHOLABO";
$config_url = "http://audio.facturas.be"; // sin / al final
$config_direccion = "Rue de la Technologie 65, \n1082 Berchem-Sainte-Agathe, \nBelgique";
$config_tel = "+32(0)2 345 37 94";
$config_logo = "logo.png";
//
$config_grupo_por_defecto = 'centros';
// si el numero de pedido es inferior a x cifras llenara con ceros en la parte izquierda 
// cuantas cifras debe tener min?
$config_ceros_bon = 6; 
// idioma por defecto del sistema
$cfg_idioma  = "en_GB"; 
$config_idioma  = $cfg_idioma; 
// limite de lineas en las tablas de los diferentes items 
$cfg_limite_items_en_tablas = 50; 
date_default_timezone_set('Europe/Brussels');
# configuracion del email 
# configuracion del email 
# configuracion del email 
# configuracion del email 
# configuracion del email 
# 
# email_nombres y apellidos
$config_email_nombre = "Robinson Coello S."; 
# email_usuario, generalmente formato email
$config_email_email = "robinson@facturas.be";
// suele ser el mismo email
$config_email_usuario = "robinson@facturas.be"; 
# email_clave, la clave del email
$config_email_clave = "HIhSu6IEuFDo"; 
# email_pop, seridor entrante
$config_email_pop = "mail.facturas.be";
# email_pop_puerto
$config_email_pop_puerto = "995";
# email_smtp Servidor Saliente
$config_email_smtp = "mail.facturas.be";
# email_smtp_puerto
$config_email_smtp_puerto = "465";
# Carbon Copie
# CC
# email_nombres y apellidos
$config_email_cc_nombre = "Robinson Coello S."; 
# email_usuario, generalmente formato email
$config_email_cc_usuario = "robinson@facturas.be"; 
// suele ser el mismo email
$config_email_cc_usuario = "robinson@facturas.be"; 
# email_clave, la clave del email
$config_email_cc_clave = "HIhSu6IEuFDo"; 
# email_pop, seridor entrante
$config_email_cc_pop = "mail.facturas.be";
# email_pop_puerto
$config_email_cc_pop_puerto = "995";
# email_smtp Servidor Saliente
$config_email_cc_smtp = "mail.facturas.be";
# email_smtp_puerto
$config_email_cc_smtp_puerto = "465";
#
$r1 = 1;
$r2 = 1;
// envio de emails
#contacto | admin | Motivo
#--------|-------|---------------------------------------------		 
#YES	| si	| al cambiar de estatus de un contacto
#YES	| si	| al crear un pedido 
#YES	| si 	| al editar un pedido -->> error, al editar el admin da error email
#YES	| si 	| cuando un usuario se registra
#YES	| si	| Cuando alguien solicita codigo para cambiar de clave
#YES	| si	| cuando alguien cambia la clave
#
$config_enviar_email_contacto_cambia_estatus = true;
$config_enviar_email_admin_cambia_estatus = true;
#
$config_enviar_email_contacto_crea_pedido = true;
$config_enviar_email_admin_crea_pedido = true;
#
$config_enviar_email_contacto_editar_pedido = true;
$config_enviar_email_admin_editar_pedido = true;
#
$config_enviar_email_contacto_auto_registro = true;
$config_enviar_email_admin_auto_registro = true;
#
$config_enviar_email_contacto_scc = true; // solicita cambio de clave
$config_enviar_email_admin_scc = true; // solicita cambio de clave
#
$config_enviar_email_contacto_cambia_clave = true;
$config_enviar_email_admin_cambia_clave = true;