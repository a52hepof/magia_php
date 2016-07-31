

<?php
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

$ubicacion = (isset($_GET['ubicacion']))? "$_GET[ubicacion]" : "top"; 
$padre = (isset($_GET['padre']))? "$_GET[padre]" : "config"; 
$p = (isset($_GET['p']))? "$_GET[p]" : "plugins_lista"; 




?>










<h2>Contenido de tu base de datos [<?php echo "$bdatos"; ?>]
    <a href="index.php?p=plugins_lista" title="Update">
        <span class="glyphicon glyphicon-refresh"></span>
    </a>
</h2>

<p>configuracion del menu</p>




<form class="form-horizontal" method="get" action="?">
    <input  type="hidden" name="p" value="plugins_lista">
    
  <div class="form-group">
    <label for="exampleInputName2">Ubicacion</label>
    <select class="form-control" name="ubicacion">
        
        <option value="top" <?php if($ubicacion == 'top'){echo " selected"; }?>>Menu Superior</option>        
        <option value="sidebar" <?php if($ubicacion == 'sidebar'){echo " selected"; }?>>Menu Lateral</option>        
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
            $i = 1;
            foreach ($resultado as $reg) {  
              echo '<option value="' . $reg[0] . '"'; 
              if($padre == $reg[0]){echo " selected"; }
              echo '>' . $reg[0] . ' </option>';

            $i++;
            }
            ?>
  </select>
  </div>
    
    
  <button type="submit" class="btn btn-default">Config Menu</button>
</form>








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

                if (
                        file_exists($path_plugins . '/' . $reg[0])
                ) {
                    echo '<tr>        
                        <td>' . $i . '</td>
                        <td><b>' . $reg[0] . '</b><br>' . $path_plugins . '/' . $reg[0] . '</td>
                        <td>.</td>
                        <td>.</td>
                        <td>.</td>
                        <td>Creado</td>                
                    </tr>';
                } else {
                    echo '<tr>        
                            <td>' . $i . '</td>                            
                            <td><b>' . $reg[0] . '</b><br>' . $path_plugins . '/' . $reg[0] . '</td>
                            <td><b>' . $ubicacion . '</td>
                            <td><b>' . $padre . '</td>
                            <td><b>' . $reg[0]  . '</td>
                            <td>                                       
                                <a href="index.php?p=plugins_crear&nombrePlugin=' . $reg[0] . '&ubicacion='.$ubicacion.'&padre='.$padre.'&label='.$reg[0].'">Crear plugin</a></td>
                        </tr>';
                }
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>

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
