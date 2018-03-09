<?php
// para mostrar los errores
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "./admin/bd.php";
include "./admin/bd_funciones.php";
include "./admin/config.php";
include "./admin/conec.php";
include "./admin/coneccion.php";
include "./admin/funciones.php";
include "./admin/gestion_bd.php";
include "./admin/permisos.php";
include "./admin/mensajes.php";

if (isset($_REQUEST['ubicacion'])) {
    $ubicacion = $_REQUEST['ubicacion'];
} else {
    $ubicacion = "top";
}
//--------------------------
if (isset($_REQUEST['a'])) {
    $a = $_REQUEST['a'];
} else {
    $a = "";
}
if (isset($_REQUEST['p'])) {
    $p = $_REQUEST['p'];
} else {
    $p = "index";
}
if (isset($_REQUEST['c'])) {
    $c = $_REQUEST['c'];
} else {
    $c = "index";
}
if (isset($_REQUEST['tabla'])) {
    $tabla = mysql_real_escape_string($_REQUEST['tabla']);
}
?>
<html>
    <head>
        <title>Magia php <?php echo magia_version(); ?></title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
        <link href="estilo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div class="container">




            <?php
            include "./vista/header.php";
            ?>

            <?php
            if ($a == 'configBd') {
                include "./request/updateDb.php";
            }

            if ($a == 'config') {
                include "./request/config.php";
            }
            ?>

            <div class="row">
                <div class="col-lg-3">

                    <?php
                    if (file_exists("./vista/menu_izq_$p.php")) {
                        include "./vista/menu_izq_$p.php";
                    } else {
                        include "./vista/menu_izq_.php";
                    }
                    ?>




                </div>
                <div class="col-lg-9">

                    <?php
                    include "./controladores/$p.php";
                    ?>        


                </div>


            </div>

            <hr>Magia_php 2017

        </div>            
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    </body>
</html>