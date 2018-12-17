<h2>Form crear plugin</h2>






<form class="form-horizontal">

    <div class="form-group">
        <label for="nombrePlugin" class="col-sm-2 control-label">$nombrePlugin</label>
        <div class="col-sm-10">
            <input type="text" name="nombrePlugin" id="nombrePlugin" class="form-control" placeholder="" value="<?php echo $nombrePlugin; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="path_plugins" class="col-sm-2 control-label">$path_plugins</label>
        <div class="col-sm-10">
            <input type="text" name="path_plugins" id="path_plugins" class="form-control" placeholder="/vat/www/html/plugin" value="<?php echo $path_plugins; ?>">
        </div>
    </div>
    
    <hr>
    _pagina
    <hr>

    <div class="form-group">
        <label for="pagina" class="col-sm-2 control-label">_pagina</label>
        <div class="col-sm-10">
            <input type="text" name="pagina" id="pagina" class="form-control" placeholder="pagina" value="<?php echo $pagina; ?>">
        </div>
    </div>
    
    <hr>
    Menu
    <hr>

    <div class="form-group">
        <label for="ubicacion" class="col-sm-2 control-label">$ubicacion</label>
        <div class="col-sm-10">
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" placeholder="$ubicacion" value="<?php echo $ubicacion; ?>">
        </div>
    </div>

    <div class="form-group">
        <label for="padre" class="col-sm-2 control-label">$padre</label>
        <div class="col-sm-10">
            <input type="text" name="padre" id="padre" class="form-control" placeholder="padre" value="<?php echo $padre; ?>">
        </div>
    </div>


    <div class="form-group">
        <label for="label" class="col-sm-2 control-label">$label</label>
        <div class="col-sm-10">
            <input type="text" name="label" id="label" class="form-control" placeholder="label" value="<?php echo $label; ?>">
        </div>
    </div>
    
    
    <hr>
    Permisos
    <hr>

    
    
    
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>

</form>