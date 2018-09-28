<?php
session_start("magia_php");
include "../admin/bd.php";
include "../admin/configuracion.php";
include "../admin/coneccion.php";
include "z_verificar.php";
include "../admin/errores.php";
include "../admin/funciones.php";
include "../admin/conec.php";
include "../admin/mvc.php";
include "../admin/funciones_sql.php";
include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
include "../admin/formularios.php";
include "../admin/menu.php";
include "../admin/mensajes.php";
include "../admin/paginacion.php";
///require '../includes/PHPMailer-5.2.23/PHPMailerAutoload.php';
_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";
$_usuarios_idioma = contactos_campo_segun_email('idioma', $_usuarios_usuario);

$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : "home";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "index";
// para las paginaciones de todas las paginas
$pag = (isset($_REQUEST['pag'])) ? $_REQUEST['pag'] : 0;

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title><?php echo "$config_nombre_web"; ?></title>

        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../includes/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="home/vista/gestion.css" >
        <link rel="stylesheet" href="estilo.css"/>

        <?php
        $scripts = "./$p/scripts/$c.php";                  
        (file_exists($scripts)) ? include "$scripts" : "";
        ?>

    </head>
    
    <body id="<?php echo "$p" . "_" . "$c"; ?>">


        <?php
        if ($_usuarios_grupo == 'centros') {
            include "home/vista/nav_sup_contactos.php";
        } else {
            include "home/vista/nav_sup.php";
        }
        ?>
        <div class="container-fluid"> <!-- 1 -->
            <div class="row">	<!-- 2 -->
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> <!-- 3 -->                                        


                    <ol class="breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span> 
                            <a href="index.php"><?php _t("Inicio"); ?>
                            </a>
                        </li>
                        <li class="active">
                            <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 
                            <a href="<?php echo "index.php?p=$p"; ?>">
                                <?php _t("$p"); ?>
                            </a>
                        </li>
                        <li><a href="#"><?php _t("$c"); ?></a></li>
                    </ol>    


                    <?php
                    include "home/vista/sidebar.php";
                    include './' . $p . '/controlador/' . $c . '.php';                    
                    ?>

                </div>	  <!-- /3 --> 
            </div>  <!-- /2 -->
        </div>	<!-- /1 -->

                    <?php
                    include "home/vista/footer.php";
                    // cerramos la coneccion 
                  //  mysql_close($conexion);
                    ?>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../includes/bootstrap/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>