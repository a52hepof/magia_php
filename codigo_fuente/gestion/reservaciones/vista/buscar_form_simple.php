
<form method="get" action="index.php">
    <input type="hidden" name="p" value="reservaciones">
    <input type="hidden" name="c" value="buscar">






    <div class="form-group">
        <label for="reservaciones_id_parking"><?php _t("Parkings"); ?></label>
        <select class="form-control" name="reservaciones_id_parking">
            <option value="todos"><?php _t("Todos"); ?></option>
            <?php
            foreach (parkings_id_array() as $key => $value) {
                echo '<option value="' . $value . '">'.$value.' : '.parkings_campo("numero", $value).', ' . parkings_campo("direccion", $value) .'</option>';
            }
            ?>
        </select>
    </div>





    <div class="form-group">
        <label for="reservaciones_fecha_i"><?php _t("Fecha"); ?></label>
        <input type="date" class="form-control" id="reservaciones_fecha_i" name="reservaciones_fecha_i"
               placeholder="<?php _t("aaaa-dd-mm"); ?>">
    </div>


    <div class="form-group">
        <label for="reservaciones_hora_i"><?php _t("hora"); ?></label>
        <select class="form-control" name="reservaciones_hora_i">
            <?php reservaciones_hora_i_add()?>
        </select>
    </div>



    <div class="form-group">
        <label for="reservaciones_placa"><?php _t("Auto"); ?></label>
        <input type="text" class="form-control" id="reservaciones_fecha_i" name="reservaciones_placa" placeholder="<?php _t("1-ABC-568"); ?>">
    </div>




    <div class="form-group">
        <label for="reservaciones_id_estatus"><?php _t("Estatus"); ?></label>
        <select class="form-control" name="reservaciones_id_estatus">
            <option value="todos"><?php _t("Todos"); ?></option>
            <?php
            foreach (reserva_estatus_array() as $key => $value) {
                echo '<option value="' . $value . '">' . _tr(reserva_estatus_campo('estatus', $value)) . '</option>';
            }
            ?>
        </select>
    </div>

    <?php
    //  echo var_dump(reserva_estatus_array());
    ?>


    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>