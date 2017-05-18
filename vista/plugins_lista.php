



<?php
/*
  echo "<pre>";
  echo var_dump(bdd_lista_tablas_bdd());
  echo "</pre>";
 * 
 */
/*
 * 
 * 
  <p>Lista de tablas en la base de datos <b><?php echo "$bdatos"; ?></b>:
  <a href="index.php?p=plugins_lista" title="Update">
  <span class="glyphicon glyphicon-refresh"></span>
  </a>
  </p>

  <form action="?" method="get">
  <input type="hidden" name="p" value="plugins_crear">
  <div class="form-group">
  <label for="tabla">Tabla</label>
  <select class="form-control" name="nombrePlugin">
  <option value="base">Escoje una tabla </option>
  <?php
  $i = 1;
  foreach ($resultado as $reg) {
  $html = (file_exists($path_plugins . '/' . $reg[0])) ?
  '<option disabled="">-- Ya Creada ' . $reg[0] . '</option>' :
  '<option value="' . $reg[0] . '" >' . $reg[0] . ' </option>';
  echo $html;
  $i++;
  }
  ?>
  </select>
  </div>

  <div class="form-group">
  <label for="menu">Menu padre</label>
  <select class="form-control" name="padre">
  <option value="">Sin Padre</option>
  <option value="config">Config</option>
  <?php
  menu_add_plugin();
  ?>
  </select>
  </div>

  <div class="form-group">
  <label for="menu">Menu</label>
  <input class="form-control" type="text" name="label">
  </div>
  <button type="submit" class="btn btn-primary">Crear plugin</button>
  </form> */

$ubicacion = (isset($_GET['ubicacion'])) ? "$_GET[ubicacion]" : "top";
$padre = (isset($_GET['padre'])) ? "$_GET[padre]" : "config";
$p = (isset($_GET['p'])) ? "$_GET[p]" : "plugins_lista";
?>










<h2>Contenido de tu base de datos [<?php echo "$bdatos"; ?>]
    <a href="index.php?p=plugins_lista" title="Update">
        <span class="glyphicon glyphicon-refresh"></span>
    </a>
</h2>

<p>Configuracion del menu</p>







<div class="table-responsive"> 		  
    <table class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th> #</th>
                <th> Table</th>
                <th> Ubicacion</th>
                <th> Padre</th>
                <th> Label</th>
                <th> Accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($resultado as $reg) {
                $p = $reg[0];
                

                if (
                        file_exists($path_plugins . '/' . $reg[0])
                ) {
                    echo '<form method="get" action=""> <tr>        
                        <td>' . $i . '</td>
                        <td><b>' . $reg[0] . '</b><br>' . $path_plugins . '/' . $reg[0] . '</td>
                        <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td><a href="index.php?p=columnas_de_tabla&tabla=' . $reg[0] . '">Detalles</a></td>                
                    </tr>';
                } else {
                    echo '<tr>        
                            <td>' . $i . '</td>                            
                            <td><b>' . $reg[0] . '</b><br>' . $path_plugins . '/' . $reg[0] . '</td>
                            
                            <td></td>
                            <td></td>
                            <td>
                            
                            


                            </td>

<td>                                       
                                <a href="index.php?p=plugins_crear&nombrePlugin=' . $reg[0] . '&ubicacion=' . $ubicacion . '&padre=' . $padre . '&label=' . $reg[0] . '">Crear plugin</a></td>
                        </tr></form>';
                }
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>

<form method="get" action="">
    <input name="ok" type="submit">
</form>

<?php
/*
  <h2>Lista de tablas</h2>
  <p>Lista de tablas en la base de datos <b><?php echo "$bdatos"; ?></b>:
  <a href="index.php?p=plugins_lista" title="Update">
  <span class="glyphicon glyphicon-refresh"></span>
  </a>
  </p>
  <ol>
  <?php
  $i = 1;
  foreach ($resultado as $reg) {
  echo "<li>$reg[0] </li>";
  $i++;
  }
  ?>
  </ol>
 */
?>