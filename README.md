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




## Configuración
La primer cosa que debes hacer es configurar el fichero bd.php con los datos de tu base de datos:
```
<?php  
$hostname = "localhost"; 
$dbname = "gestionInmoweb"; 
$username = "root"; 
$password = ""; 
```

```

## Ahora configura el archivo 
``` ./admin/config.php ```

Replaza ``` miweb ``` por el nombre de tu sitio : ´´´http://localhost/miweb´´´ de forma que quede así:

```
<?php

$path_web = "/var/www/html/miweb";
$path_plugins = "/var/www/html/miweb/gestion";
$path_plugins_controlador = "path_plugins_controlador";
$path_plugins_modelos = "";
$path_plugins_vista = "";
$path_plugins_reg = "";

```

