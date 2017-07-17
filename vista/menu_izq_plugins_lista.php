
<H2>Config menu</H2>                    
<form class="form-horizontal" method="get" action="?">
    <input  type="hidden" name="p" value="plugins_lista">

    <div class="form-group">
        <label for="ubicacion">Ubicación</label>

        <select class="form-control" name="ubicacion">
            <option value="top" <?php
            if ($ubicacion == 'top') {
                echo " selected";
            }
            ?>>Menu Superior</option>        
            <option value="sidebar" <?php
            if ($ubicacion == 'sidebar') {
                echo " selected";
            }
            ?>>Menu Lateral</option>        
        </select>


    </div>


    <div class="form-group">
        <label for="padre">Menu Padre</label>

        <select class="form-control" name="padre">
            <option value="gestion">Gestion</option>
            <option value="admin">Admininistracion</option>
            <option value="mantenimiento">Mantenimiento</option>
            <option value="config">Configuracion</option>
            <option value="sistema">Sistema</option>
            <?php
            foreach (bd_tablas() as $key => $value) {
                echo '<option value="' . $value[0] . '" >' . $value[0] . ' </option>';
            }
            ?>
        </select>
    </div>


    <button type="submit" class="btn btn-default">Config Menu</button>
</form>

<ul>
    <li><a href="?p=config&tabla=_contenido">config</a></li>
    <li><a href="?p=columnas_de_tabla&tabla=_contenido">columnas_de_tabla</a></li>
    <li><a href="?p=demo">demo</a></li>
    <li><a href="?p=detalles_tabla&tabla=_contenido">detalles_tabla</a></li>
    <li><a href="?p=maqueta&tabla=_contenido">maqueta</a></li>
    <li><a href="?p=maqueta_izq&tabla=_contenido">maqueta_izq</a></li>
    <li><a href="?p=columnas_de_tabla&tabla=_contenido">columnas_de_tabla</a></li>

</ul>







        <select class="form-control" name="padre">
            <?php
            foreach (bd_grupos() as $key => $value) {
                echo '<option value="">'.$value.'</option>';
            }
            ?>
        </select>






<?php
$grupos = array("root", "admin", "editor");

foreach ($grupos as $grupo) {
    echo "<h2>$grupo</h2>";
    echo '<INPUT type="checkbox" name="ver" value="1"> ver
<INPUT type="checkbox" name="crear" value="1"> crear
<INPUT type="checkbox" name="editar" value="1"> editar
<INPUT type="checkbox" name="borrar" value="1"> borrar
';
}
?>


