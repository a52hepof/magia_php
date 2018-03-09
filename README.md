# Magia PHP

Magia PHP es un sistema que nos genera las páginas php y html necesarias para la gestión de la información 
que tengamos en una base de datos MYSQL, nos ayuda a crear los formularios necesarios para ver, crear, editar y borrar (VCED) 
facilmente los items de esa base de datos creando un sitio web que lo puedes usar en tu intranet o internet.


### Instalación de Magia_php

La forma más facil crear una web para magia_php


copias magia_php en un directorio en la razi de tu web 
```
git clone https://github.com/robincoello/magia_php.git /var/www/html/magia_php

```

Una vez hecho esto, ingresas a la web creada 

[![http://localhost/magia_php/index.php](http://localhost/magia_php/index.php)](http://localhost/magia_php/index.php)

Alli sigues los pasos indicados

















## configuracion detallada

Si tienes algun problema esta es la forma de instalar detalladamente 

copias magia_php en un directorio en la razi de tu web 

```
git clone https://github.com/robincoello/magia_php.git /var/www/html/magia_php

```

## Configuración de la base de datos
La primer cosa que debes hacer es configurar el fichero `./admin/bd.php` para la coneccón a la base de datos, (la de tu web)

```
<?php  
$hostname = "localhost"; 
$dbname = "mi_base_de_datos"; 
$username = "root"; 
$password = "sd5s"'(spfo&é7d(§4e"; 
```


## Configuración de las rutas

Estas son las rutas donde estan tu web,  para ello edita el fichero

``` ./admin/config.php ```

de forma que quede así:

```
<?php

$path_web = "/var/www/html/miweb";
$path_plugins = "/var/www/html/miweb/gestion";
$path_plugins_controlador = "path_plugins_controlador";
$path_plugins_modelos = "";
$path_plugins_vista = "";
$path_plugins_reg = "";

```

## Copiar las tablas

Copia la base de datos bd_extructura.sql para ellos puedes entrar en phpmyadmin  o via la consola con lo siguiente 

```
mysql -u root -p mi_base_de_datos < bd_extructura.sql;
```

Te debe dar 12 tablas 


## Crear el proyecto

Ahora vamos a crear todos los ficheros de nuestro proyecto, para ello asegurate de haber dado los permisos de  escritura a la 
carpeta donde vas a crearlo

Para ello ejecuta esto: 

```
sudo chmod 777 -R * /var/www/html/miweb
```

Una vez hecho esto: 
[![Entra en http://localhost/magia_php/index.php](http://localhost/magia_php/index.php)](http://localhost/magia_php/index.php)

y click en el item (Crear proyecto)

Esto te creara varias carpetas y ficheros,  una vez terminado volvemos a ejecutar 

```
sudo chmod 777 -R * /var/www/html/miweb
```

Muy importante este paso ya que no podremos crear los plugins en el paso siguiente si no tenemos los derechos de escritura.

## Crear plugins

Ahora debemos ir creando los ficheros para cada tabla

https://www.youtube.com/embed/fbQWQs_5wnY


Por defecto Magia_php crea 4 tipos de usuarios
* root > 1111 
* administradores > 1110
* usuarios > 1110
* invitados > 1000

## Permisos 
Los permisos estan basados en 4 acciones: Ver, Crear, Editar, Borrar (VCEB) y a cada 
accion se le da dos valores: 0|1 , si el valor esta en 1, el usuario puede realizar 
esta acción, si esta en 0, no puede realizarla.



## Recuerdos 
idiomas

http://omegat.sourceforge.net/manual-latest/es/appendix.languages.html






















[![Join the chat at https://gitter.im/robincoello/Magia_php](https://badges.gitter.im/robincoello/Magia_php.svg)](https://gitter.im/robincoello/Magia_php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)


