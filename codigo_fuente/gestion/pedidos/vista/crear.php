
<div class="well well-sm">

    <div class="row">
        <div class="col-md-6"><h2><?php _t("Nuevo"); ?><?php //echo "$config_nombre_web";    ?></h2></div>
        <div class="col-md-6"><h2 class="text-right"><?php _t("Bon n°"); ?>:                 

                <span class="text-warning">web-<?php echo $pedidos_id_formateado; ?></span></h2></div>
    </div>
</div>








<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="index.php">

                    <input type="hidden" name="p" value="pedidos"> 
                    <input type="hidden" name="c" value="crear"> 
                    <input type="hidden" name="a" value="crear"> 
                    <input type="hidden" name="pedidos_ref" value="<?php echo $uniqid; ?>"> 



                    <div class="col-md-12">
                        <div class="col-md-4">


                            <a href="index.php" class="thumbnail">
                                <?php logo();?>
                            </a>



                        </div>
                        <div class="col-md-8">

                            <h3><?php echo "$config_nombre_web"; ?></h3>


                            <h4>
                                <?php echo "$config_direccion"; ?>
                            </h4></div>

                    </div>









                    <div class="form-group">
                        <label for="pedidos_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="fecha" 
                                   name="pedidos_fecha" 
                                   placeholder="pedidos_fecha" 
                                   value="<?php echo date("Y-m-d"); ?>"
                                   readonly=""
                                   >
                        </div>
                    </div>

                    <?php if (permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)) { ?>
                        <div class="form-group">
                            <label for="pedidos_email" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pedidos_email">
                                    <?php contactos_add(); ?>
                                </select>
                            </div>
                        </div>


                    <?php } else { ?>
                        <input type="hidden" name="pedidos_email" value="<?php echo $_usuarios_usuario; ?>"> 

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"><?php _t("Centro auditivo"); ?></label>
                            <div class="col-sm-10">
                                <input type="text" 
                                       class="form-control" 
                                       id=""
                                       name="" 
                                       placeholder="<?php _t("Centro auditivo"); ?>"
                                       value=" <?php echo contactos_campo_segun_email("empresa", $_usuarios_usuario); ?>"
                                       readonly=""
                                       >
                            </div>
                        </div>                                                         

                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label>
                            <div class="col-sm-10">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="" 
                                    name="" 
                                    placeholder="<?php _t("Nombre del contacto"); ?>"
                                    value="<?php echo contactos_campo_segun_email("contacto", $_usuarios_usuario); ?> - <?php echo contactos_campo_segun_email("email", $_usuarios_usuario); ?>"
                                    readonly=""
                                    >
                            </div>
                        </div>
                    <?php }
                    ?>


            </div>
        </div>
    </div>





    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span></div>
            <div class="panel-body">




                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="payant" value="1"> <?php _t("Payant"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remake" value="1"> <?php _t("Remake"); ?>
                    </label>
                </div>




                <div class="form-group">
                    <label for="du_numero"><?php _t("De n°"); ?></label>
                    <input type="text" class="form-control" id="du_numero" name="du_numero" placeholder="" value="">
                </div>

                <h4><?php _t("Perdida auditiva"); ?></h4>

                <div class="form-group">

                    <select class="form-control" name="perdida_auditiva" required="">
                        <option value=""><?php echo _t('Escoja una opción'); ?></option>
                        <option value="legere"><?php echo _t('Legere'); ?></option>
                        <option value="moyenne"><?php echo _t('Moyenne'); ?></option>
                        <option value="grave"><?php echo _t('Grave'); ?></option>
                    </select>
                </div>




                <h4><?php _t("Construcción orejera"); ?></h4>



                <div class="form-group">

                    <select class="form-control" name="orejera" required="">
                        <option value=""><?php echo _t('Escoja una opción'); ?></option>
                        <option value="molle"><?php echo _t('Molle'); ?></option>
                        <option value="dure"><?php echo _t('Dure'); ?></option>                        
                    </select>
                </div>




            </div>
        </div>
    </div>
</div>





<div class="row">

    <div class="col-md-4">

        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Tipos"); ?></div>
            <div class="panel-body">



                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="bte" value="1"> <?php _t("Bte"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rite" value="1"> <?php _t("Rite"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="slim_tube" value="1"> <?php _t("Slim Tube"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="custom_dume" value="1"> <?php _t("Custom Dume"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="natation" value="1"> <?php _t("Natation"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="dormir" value="1"> <?php _t("Dormir"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="anti_bruit" value="1"> <?php _t("Anti ruido"); ?>
                    </label>
                </div>







            </div>
        </div>




    </div>


    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Modelos"); ?></div>
            <div class="panel-body">



                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="invisible" value="1"> <?php _t("Invisible"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="coquille" value="1"> <?php _t("Coquille"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="conduit_seul" value="1"> <?php _t("Conduit seul"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="epaulemnent" value="1"> <?php _t("Epaulement"); ?>
                    </label>
                </div>

                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="prince_de_crave" value="1"> <?php _t("Prince de Crave"); ?>
                    </label>
                </div>

                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="iros" value="1"> <?php _t("Iros"); ?>
                    </label>
                </div>








            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Materiales"); ?></div>
            <div class="panel-body">



                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="resine" value="1"> <?php _t("Résine"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="silicone" value="1"> <?php _t("Silicone"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="thermotec" value="1"> <?php _t("Thermotec"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="thermosoft" value="1"> <?php _t("Thermosoft"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="anti_bacterie" value="1"> <?php _t("Anti-Bactérie"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="mix" value="1"> <?php _t("Mix"); ?>
                    </label>
                </div>

            </div>
        </div>
    </div>

</div>





<div class="row">


    <!-- ------- -->    
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Ventilación"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->

                <div class="form-group">
                    <label class="sr-only" for="ventilation_gauche"><?php _t("Izquierda"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Izquierda"); ?></div>
                        <input type="text" class="form-control" id="ventilation_gauche" name="ventilation_gauche" placeholder="" value="">
                        <div class="input-group-addon">mm</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="ventilation_droite"><?php _t("Derecha"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Derecha"); ?></div>
                        <input type="text" class="form-control" id="ventilation_droite" name="ventilation_droite" placeholder="" value="">
                        <div class="input-group-addon">mm</div>
                    </div>
                </div>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>



        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Color izquierda"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->
                <textarea class="form-control" rows="3" name="couleur_gauche"></textarea>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>


    </div>
    <!-- ------- -->


    <!-- ------- -->    
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("RITE / SLIM TUBE"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->

                <div class="form-group">
                    <label class="sr-only" for="marques"><?php _t("Marques"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Marques"); ?></div>
                        <input type="text" class="form-control" id="marques" name="marques" placeholder="" value="">

                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="models"><?php _t("Models"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Models"); ?></div>
                        <input type="text" class="form-control" id="models" name="models" placeholder="" value="">

                    </div>
                </div>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>



        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Color derecha"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->
                <textarea class="form-control" rows="3" name="couleur_droite" ></textarea>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>


    </div>
    <!-- ------- -->



    <!-- ------- -->    
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Opciones"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="hoka" value="1"> <?php _t("Hoka"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="cordon" value="1"> <?php _t("Cordon"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="pailletes" value="1"> <?php _t("Pailletes"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="fil_nylon" value="1"> <?php _t("Fil nylon"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="coude_soupe" value="1"> <?php _t("Codo suave"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" name="implant" value="1"> <?php _t("Implante"); ?>
                    </label>
                </div>








                <!-- ------------------------------------------------------------ -->
            </div>
        </div>
    </div>
    <!-- ------- -->










    <!-- ------- -->    
    <div class="col-md-12">


        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Notas"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->
                <textarea class="form-control" rows="3" name="notas"></textarea>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>


    </div>
    <!-- ------- -->

    <!-- ------- -->    
    <div class="col-md-12">


        <button type="submit" class="btn btn-primary"><?php _t('Enviar'); ?></button>


    </div>
    <!-- ------- -->






</form> 



</div>