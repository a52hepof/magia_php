# Magia PHP

[![Join the chat at https://gitter.im/robincoello/Magia_php](https://badges.gitter.im/robincoello/Magia_php.svg)](https://gitter.im/robincoello/Magia_php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
* Sistem to help you in the form creation
* Sistema para ayudar en la creación de formularios 

### instalación
Ve a la raíz de tu sitio web

`
cd ~/public_html
`

Alli has una copia del Magia_php


`
git clone https://github.com/robincoello/Magia_php.git
`

Entra en la carpeta

`
cd Magia_php

`




## 1 Configuración
La primer cosa que debes hacer es configurar el fichero bd.php con los datos de tu base de datos:
```
<?php  
$hostname = "localhost"; 
$dbname = "mi_base_de_datos"; 
$username = "root"; 
$password = ""; 
```


## 2 Ahora configura el archivo 

``` ./admin/config.php ```

Replaza ``` miweb ``` por el nombre de tu sitio : ``` http://localhost/miweb ```  de forma que quede así:

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
Son tablas que va a crear Magia_php en tu base de datos, esto es necesario para su buen funcionamiento, para ello  

[![Entra en http://localhost/magia_php/index.php](http://localhost/magia_php/index.php)](http://localhost/magia_php/index.php)

y click en el item tres de la lista (Copiar base.sql (grupos, idiomas, paginas, permisos, usuarios)


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

Esto te creara varias carpetas y ficheros una vez terminado, vuelve a ejecutar 

```
sudo chmod 777 -R * /var/www/html/miweb
```











































