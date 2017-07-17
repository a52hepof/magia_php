<?php
/*
vardump($pedidos_descripcion);

echo var_dump(json_decode($pedidos_descripcion));

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($pedidos_descripcion));
var_dump(json_decode($json, true));
*/
?>



<div class="well well-sm">

    <div class="row">
        <div class="col-md-6"><h2><?php _t("Detalles"); ?><?php //echo "$config_nombre_web";  ?></h2></div>
        <div class="col-md-6">
            
            <h2 class="text-right"><?php _t("Bon n°"); ?>:                 
                <span class="text-warning">web-<?php echo pedidos_id_formateado($pedidos_id); ?></span>
            </h2>
        
        </div>
    </div>
</div>






<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">




                <form class="form-horizontal" method="get" action="index.php">

                    <input type="hidden" name="p" value="pedidos"> 
                    <input type="hidden" name="c" value="editar"> 
                    <input type="hidden" name="a" value="nada"> 
                    <input type="hidden" name="pedidos_id" value="<?php echo $pedidos_id; ?>"> 



                    <div class="col-md-12">
                        <div class="col-md-4">


                            <a href="index.php" class="thumbnail">
                                <img src="../imagenes/labo.png" alt="">
                            </a>



                        </div>
                        <div class="col-md-4">

                            <h3><?php echo "$config_nombre_web"; ?></h3>


                            <h4>
                                <?php echo "$config_direccion"; ?>
                            </h4></div>

                    </div>









                    <div class="form-group">
                        <label for="pedidos_fecha" class="col-sm-2 control-label"><?php _t("Fecha"); ?></label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="pedidos_fecha" 
                                   name="pedidos_fecha" 
                                   placeholder="" 
                                   value="<?php echo $pedidos_fecha ?>"
                                   readonly=""
                                   >
                        </div>
                    </div>



                    <?php //if (permisos_tiene_permiso('crear', 'pedidos_otros', $_usuarios_grupo)) { ?>
                    <?php if (1 == 2) { ?>
                        <div class="form-group">
                            <label for="pedidos_email" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pedidos_email">
                                    <?php contactos_add(); ?>
                                </select>
                            </div>
                        </div>


                    <?php } else { ?>
                        <div class="form-group">
                            <label for="pedidos_empresa" class="col-sm-2 control-label"><?php _t("Centro auditivo"); ?></label>
                            <div class="col-sm-10">
                                <input type="text" disabled="" 
                                       class="form-control" 
                                       id="pedidos_empresa" 
                                       name="pedidos_empresa" 
                                       placeholder="<?php _t("Centro auditivo"); ?>"
                                       value="<?php echo $pedidos_empresa; ?>"
                                       readonly=""
                                       >
                            </div>
                        </div>                                                         

                        <div class="form-group">
                            <label for="pedidos_contacto" class="col-sm-2 control-label"><?php _t("Contacto"); ?></label>
                            <div class="col-sm-10">
                                <input 
                                    type="text" disabled="" 
                                    class="form-control" 
                                    id="pedidos_contacto" 
                                    name="pedidos_contacto" 
                                    placeholder="<?php _t("Nombre del contacto"); ?>"
                                    value="<?php echo $pedidos_contacto; ?>"
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
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span><?php echo _t(pedidos_estatus($pedidos_estatus)); ?></div>
            <div class="panel-body">




                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="payant" value="1" <?php echo "$payant_checked"; ?>> <?php _t("Payant"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="remake"  value="1" <?php echo "$remake_checked"; ?>> <?php _t("Remake"); ?>
                    </label>
                </div>




                <div class="form-group">
                    <label for="du_numero"><?php _t("De n°"); ?></label>
                    <input type="text" disabled="" class="form-control" id="du_numero" name="du_numero" placeholder="" value="<?php echo "$data[du_numero]"; ?>">
                </div>


                

                <h4><?php _t("Pedidda Auditiva"); ?></h4>

                <div class="checkbox">
                    <label>
                        <input type="radio" name="perdida_auditiva" value="legere" <?php echo $perdida_auditiva_legere; ?>> <?php _t("Ligera"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="radio" name="perdida_auditiva" value="moyenne" <?php echo $perdida_auditiva_moyenne; ?>> <?php _t("Media"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="radio" name="perdida_auditiva" value="grave" <?php echo $perdida_auditiva_grave; ?>> <?php _t("Grave"); ?>
                    </label>
                </div>


                <h4><?php _t("Construcción orejera"); ?></h4>
                

                
                
               <div class="checkbox">
                    <label>
                        <input type="radio" name="orejera" value="molle" <?php echo $orejera_molle; ?>> <?php _t("Molle"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="radio" name="orejera" value="dure" <?php echo $orejera_dure; ?>> <?php _t("Dure"); ?>
                    </label>
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
                        <input type="checkbox" disabled="" name="bte" value="1" <?php echo "$bte_checked"; ?>> <?php _t("Bte"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="rite" value="1" <?php echo "$rite_checked"; ?>> <?php _t("Rite"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="slim_tube" value="1" <?php echo "$slim_tube_checked"; ?>> <?php _t("Slim Tube"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="custom_dume" value="1" <?php echo "$custom_dume_checked"; ?>> <?php _t("Custom Dume"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="natation" value="1" <?php echo "$natation_checked"; ?>> <?php _t("Natation"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="dormir" value="1" <?php echo "$dormir_checked"; ?>> <?php _t("Dormir"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="anti_bruit" value="1" <?php echo "$anti_bruit_checked"; ?>> <?php _t("Anti ruido"); ?>
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
                        <input type="checkbox" disabled="" name="invisible" value="1" <?php echo "$invisible_checked"; ?>> <?php _t("Invisible"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="coquille" value="1" <?php echo "$coquille_checked"; ?>> <?php _t("Coquille"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="conduit_seul" value="1" <?php echo "$conduit_seul_checked"; ?>> <?php _t("Conduit seul"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="epaulemnent" value="1" <?php echo "$epaulemnent_checked"; ?>> <?php _t("Epaulement"); ?>
                    </label>
                </div>

                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="prince_de_crave" value="1" <?php echo "$prince_de_crave_checked"; ?>> <?php _t("Prince de Crave"); ?>
                    </label>
                </div>

                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="iros" value="1" <?php echo "$iros_checked"; ?>> <?php _t("Iros"); ?>
                    </label>
                </div>


                <?php
                /*                <div class="form-group">
                  <label class="sr-only" for="models_autre"><?php _t("Otro"); ?></label>
                  <div class="input-group">

                  <input type="text" disabled="" class="form-control" id="models_autre" name="models_autre" placeholder="" value="">
                  <div class="input-group-addon"><?php _t("Otro"); ?></div>
                  </div>
                  </div>
                 */
                ?>



            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Materiales"); ?></div>
            <div class="panel-body">



                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="resine" value="1" <?php echo "$resine_checked"; ?>> <?php _t("Résine"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="silicone" value="1" <?php echo "$silicone_checked"; ?>> <?php _t("Silicone"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="thermotec" value="1" <?php echo "$thermotec_checked"; ?>> <?php _t("Thermotec"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="thermosoft" value="1" <?php echo "$thermosoft_checked"; ?>> <?php _t("Thermosoft"); ?>
                    </label>
                </div>



                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="anti_bacterie" value="1" <?php echo "$anti_bacterie_checked"; ?>> <?php _t("Anti-Bactérie"); ?>
                    </label>
                </div>

                <?php
                /*                <div class="form-group">
                  <label class="sr-only" for="matieres_autres1" ><?php _t("Otro 1"); ?></label>
                  <div class="input-group">

                  <input type="text" disabled="" class="form-control" id="matieres_autres1" name="matieres_autres1" placeholder="" value="">
                  <div class="input-group-addon"><?php _t("Otro 1"); ?></div>
                  </div>
                  </div>



                  <div class="form-group">
                  <label class="sr-only" for="matieres_autres2"><?php _t("Otro 2"); ?></label>
                  <div class="input-group">

                  <input type="text" disabled="" class="form-control" id="matieres_autres2" name="matieres_autres2" placeholder="" value="">
                  <div class="input-group-addon"><?php _t("Otro 2"); ?></div>
                  </div>
                  </div> */
                ?>








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
                        <input type="text" disabled="" class="form-control" id="ventilation_gauche" name="ventilation_gauche" placeholder="" value="<?php echo "$ventilation_gauche"; ?>">
                        <div class="input-group-addon">mm</div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="ventilation_droite"><?php _t("Ventilation Droite"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Derecha"); ?></div>
                        <input type="text" disabled="" class="form-control" id="ventilation_droite" name="ventilation_droite" placeholder="" value="<?php echo "$ventilation_droite"; ?>">
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
                <textarea disabled=""  class="form-control" rows="3" name="couleur_gauche"><?php echo "$couleur_gauche"; ?></textarea>

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
                        <input type="text" disabled="" class="form-control" id="marques" name="marques" placeholder="" value="<?php echo "$marques"; ?>">

                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="models"><?php _t("Models"); ?></label>
                    <div class="input-group">
                        <div class="input-group-addon"><?php _t("Models"); ?></div>
                        <input type="text" disabled="" class="form-control" id="models" name="models" placeholder="" value="<?php echo "$models"; ?>">

                    </div>
                </div>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>



        <div class="panel panel-primary">
            <div class="panel-heading"><span class="glyphicon glyphicon-menu-right"></span> <?php _t("Color derecha"); ?></div>
            <div class="panel-body">
                <!-- ------------------------------------------------------------ -->
                <textarea disabled="" class="form-control" rows="3" name="couleur_droite" ><?php echo "$couleur_droite"; ?></textarea>

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
                        <input type="checkbox" disabled="" name="hoka" value="1" <?php echo "$hoka_checked"; ?>> <?php _t("Hoka"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="cordon" value="1" <?php echo "$cordon_checked"; ?>> <?php _t("Cordon"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="pailletes" value="1" <?php echo "$pailletes_checked"; ?>> <?php _t("Pailletes"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label>
                        <input type="checkbox" disabled="" name="fil_nylon" value="1" <?php echo "$fil_nylon_checked"; ?>> <?php _t("Fil nylon"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="coude_soupe" value="1" <?php echo "$coude_soupe_checked"; ?>> <?php _t("Codo suave"); ?>
                    </label>
                </div>


                <div class="checkbox">
                    <label class="text-right">
                        <input type="checkbox" disabled="" name="implant" value="1" <?php echo "$implant_checked"; ?>> <?php _t("Implante"); ?>
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
                <textarea disabled=""  class="form-control" rows="3" name="notas"><?php echo "$notas"; ?></textarea>

                <!-- ------------------------------------------------------------ -->
            </div>
        </div>


    </div>
    <!-- ------- -->

    <!-- ------- -->    
    <div class="col-md-12">


        <?php 
        if($pedidos_estatus ==1 || permisos_tiene_permiso('editar', 'pedidos_otros', $_usuarios_grupo)){
            echo '<button type="submit" class="btn btn-primary">'. _tr('Editar').'</button>'; 
        }else{
            mensaje('info', 'Ya no puede editar este pedido');
        }
        ?>


    </div>
    <!-- ------- -->






</form> 



</div>