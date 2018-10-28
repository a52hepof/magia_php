<?php /**
  magia_version: 0.0.11
 * */ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="reservaciones">
    <input  type="hidden" name="c" value="buscar">
    <div class="form-group">
        <label for="Id_parking"><?php _t("Parking"); ?></label>
        <input type="text" class="form-control" name="reservaciones_id_parking" id="reservaciones_id_parking" placeholder="<?php _t("Id_parking"); ?>">
    </div>

    <div class="form-group">
        <label for="Placa"><?php _t("Placa"); ?></label>
        <input type="text" class="form-control" name="reservaciones_placa" id="reservaciones_placa" placeholder="<?php _t("Placa"); ?>">
    </div>

    <div class="form-group">
        <label for="Fecha_i"><?php _t("Fecha_i"); ?></label>
        <input type="text" class="form-control" name="reservaciones_fecha_i" id="reservaciones_fecha_i" placeholder="<?php _t("Fecha_i"); ?>">
    </div>

    <div class="form-group">
        <label for="Hora_i"><?php _t("Hora_i"); ?></label>
        <input type="text" class="form-control" name="reservaciones_hora_i" id="reservaciones_hora_i" placeholder="<?php _t("Hora_i"); ?>">
    </div>

    <div class="form-group">
        <label for="Id_estatus"><?php _t("Estatus"); ?></label>
        <input type="text" class="form-control" name="reservaciones_id_estatus" id="reservaciones_id_estatus" placeholder="<?php _t("Id_estatus"); ?>">
    </div>

    <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>