
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
            include "./vista/menu_superior.php";
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
                    <hr>
                    <?php
                    include "./vista/menu_izq_desarrollo.php";
                    ?>




                </div>
                <div class="col-lg-9">