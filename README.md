# Magia PHP

[![Join the chat at https://gitter.im/robincoello/Magia_php](https://badges.gitter.im/robincoello/Magia_php.svg)](https://gitter.im/robincoello/Magia_php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
* Sistem to help you in the form creation
* Sistema para ayudar en la creación de formularios 

Magia_php te ayuda a crear tu sitio web, pero no forma  parte de el, debes tener dos sitios uno magia_php y el otro la web que deseas crear

1) http://localhost/magia_php/ 
2) http://localhost/miweb

### Instalación de Magia_php
Ve a la raíz de tu sitio web

`
cd ~/public_html
`

Alli has una copia del Magia_php 


`
git clone https://github.com/robincoello/Magia_php.git
`

Esto te cargara la última versión de Magia_php, ahora empecemos la configuración:


## 1 Configuración de la base de datos
La primer cosa que debes hacer es configurar el fichero `./admin/bd.php` para la coneccón a la base de datos, (la de tu web)

```
<?php  
$hostname = "localhost"; 
$dbname = "mi_base_de_datos"; 
$username = "root"; 
$password = "mi_clave"; 
```


## 2 Configuración de las rutas

Estas son las rutas donde estan tu web,  para ello edita el fichero

``` ./admin/config.php ```

de forma que quede así

```
<?php

$path_web = "/var/www/html/miweb";
$path_plugins = "/var/www/html/miweb/gestion";
$path_plugins_controlador = "path_plugins_controlador";
$path_plugins_modelos = "";
$path_plugins_vista = "";
$path_plugins_reg = "";

```

## 3 Copiar las tablas

Son tablas que va a crear Magia_php en tu base de datos, esto es necesario para su buen funcionamiento, para ello, entra en:

[![http://localhost/magia_php/index.php](http://localhost/magia_php/index.php)](http://localhost/magia_php/index.php)

y click en el item tres de la lista (Copiar base.sql (grupos, idiomas, paginas, permisos, usuarios)

Esto copiara las tablas que magia_php necesita para trabajar


## 4 Crear el proyecto

Ahora vamos a crear todos los ficheros de nuestro proyecto, para ello asegurate de haber dado los permisos de  escritura a la 
carpeta donde vas a crearlo

Para ello ejecuta esto: 
```
sudo chmod 777 -R * /var/www/html/miweb
```
Una vez hecho esto: 
[![Entra en http://localhost/magia_php/index.php](http://localhost/magia_php/index.php)](http://localhost/magia_php/index.php)

y click en el item 4 de la lista (Crear proyecto)

Esto te creara varias carpetas y ficheros,  una vez terminado volvemos a ejecutar 

```
sudo chmod 777 -R * /var/www/html/miweb
```
Muy importante este paso ya que no podremos crear los plugins en el paso 5 si no tenemos los derechos de escritura.

## 5 Crear plugins

Ahora debemos ir creando los ficheros para cada tabla



<iframe width="560" height="315" src="https://www.youtube.com/embed/fbQWQs_5wnY" frameborder="0" allowfullscreen></iframe>






































