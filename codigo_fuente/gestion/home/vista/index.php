<h1>Bienvenidos</h1>

<p>Puede poner un texto de ayuda aca</p>

<?php

//echo vardump(_grupos());
//echo vardump(_idiomas());


/*
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">


            <div class="caption">
                <h3><?php _t("Mis pedidos"); ?></h3>
                <?php
                foreach (pedidos_estatus() as $codigo => $estatus) {
                    if(!$codigo){
                        echo "<p><span class=\"badge\">".pedidos_segun_email_estatus($_usuarios_usuario, $codigo)."</span> <a href=\"index.php?p=pedidos&c=buscar_segun_estatus&estatus=$codigo\">". pedidos_estatus_icono($codigo)." "._tr($estatus)."</a></p>";
                    }else {
                        echo "<p>".pedidos_segun_email_estatus($_usuarios_usuario, $codigo)." <a href=\"index.php?p=pedidos&c=buscar_segun_estatus&estatus=$codigo\">". pedidos_estatus_icono($codigo)." "._tr($estatus)."</a></p>";
                    }
                    
                }
                ?>
                <p>
                    <a href="index.php?p=pedidos&c=crear" class="btn btn-primary" role="button"><?php _t("Nuevo"); ?></a> 

                </p>
            </div>
        </div>
    </div>
</div>*/
?>








<!-- 



<h1><?php _t("Ayuda"); ?></h1>
<p><img src="../imagenes/ayuda.png"></p>
<p>Aca puede poner temas de ayuda para sus clientes</p>
<p>Esta pagina la puedes editar en /gestion/home/vista/index.php</p>



<h2>Pedidos</h2>

<p>Solo los pedidos con estatus registrados pueden ser editados por parte del cliente</p>

<p>Los estatus de los pedidos son: (<?php foreach (pedidos_estatus() as $codigo => $estatus) {echo "$estatus, ";} ?>), el cliente <b>solo</b> puede editar pedidos que estan en estatus registrado</p>
<p>Los pedidos borrados, no son realmente borrados del sistema, solo son puestos con este estatus</p>
<p></p>
<p></p>
<p></p>
-->