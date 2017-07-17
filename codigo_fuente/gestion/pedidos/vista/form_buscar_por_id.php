<form class="navbar-form navbar-right">
    <input type="hidden" name="p" value="pedidos">
    <input type="hidden" name="c" value="ver">
    <input type="hidden" name="a" value="false">

    <div class="form-group">
        <?php _t("Bon n°:"); ?> <input required="" type="number" name="pedidos_id" class="form-control" placeholder="ID" value="<?php if (isset($pedidos_id)) {echo $pedidos_id;} ?>">
    </div>
    <button type="submit" class="btn btn-danger"><?php echo _t("Buscar"); ?></button>
</form>