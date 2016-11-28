<?php
// para mostrar los errores
error_reporting(E_ALL);
ini_set('display_errors', '1');
     
include "./admin/bd.php";
include "./admin/config.php";
include "./admin/conec.php";
include "./admin/coneccion.php";
include "./admin/funciones.php";
include "./admin/gestion_bd.php";
include "./admin/permisos.php";


$plugins_carpetas = [
    "controlador",
    "modelos",
    "reg",
    "vista"
    ];

$controlador = [
    "ver.php",
    "crear.php",
    "editar.php",
    "borrar.php"];




?>
<?php
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
        <title>Magia php</title>

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
                    if (isset($tabla)) {
                        include "./vista/menu.php";
                    }
                    
                    if($p =='maqueta' ){
                       include "./vista/maqueta_izq.php"; 
                    }
                    
                     if($p=='index'){
                       include "./vista/izq.php"; 
                    }
                    
                    
                    ?>    
                    
                    <ul>
                        <li><a href="paso1.php">Paso 1</a></li>
                        <li><a href="paso2.php">Paso 2</a></li>
                        <li><a href="paso3.php">Paso 3</a></li>
                    </ul>
                    
                    

                </div>
                <div class="col-lg-9">

                 