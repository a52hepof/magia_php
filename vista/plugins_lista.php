<?php
// tablas de magia
$magia_tablas = array(
    "_contenido",
    "_grupos",
    "_idiomas",
    "_menu",
    "_opciones",
    "_paginas",
    "_permisos",
    "_traducciones",
    "_usuarios",
    "_contactos"
);

$ubicacion = (isset($_GET['ubicacion'])) ? "$_GET[ubicacion]" : "top";
$padre = (isset($_GET['padre'])) ? "$_GET[padre]" : "gestion";
$p = (isset($_GET['p'])) ? "$_GET[p]" : "plugins_lista";
?>







<h2>Contenido de tu base de datos [<?php echo "$bdatos"; ?>]
    <a href="index.php?p=plugins_lista" title="Update">
        <span class="glyphicon glyphicon-refresh"></span>
    </a>
</h2>




<hr>



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
            
            
            echo $path_plugins; 
            
            
            foreach ($resultado as $reg) {
                $p = $reg[0];
                

                    if (file_exists($path_plugins . '/' . $reg[0]) && !in_array($magia_tablas, $path_plugins)) {
                    echo '<tr>        
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
                            
                            <td>'.$ubicacion.'</td>
                            <td>'.$padre.'</td>
                            <td>'.$reg[0].'</td>
                            
                            
<td>
<a href="index.php?p=plugins_crear&nombrePlugin=' . $reg[0] . '&ubicacion=' . $ubicacion . '&padre=' . $padre . '&label=' . $reg[0] . '">Crear plugin</a>
    </td>
                        </tr>';
                }
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>




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