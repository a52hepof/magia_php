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







<h2>Crear una base para un tema [<?php echo "$bdatos"; ?>]
    <a href="index.php?p=plugins_lista" title="Update">
        <span class="glyphicon glyphicon-refresh"></span>
    </a>
</h2>

<h3><?php echo "$path_temas"; ?></h3>




<hr>



<div class="table-responsive"> 		  
    <table class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th> #</th>
                <th> Table</th>
                <th> Accion</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            foreach ($resultado as $reg) {
                $p = $reg[0];
                if (file_exists($path_temas . '/' . $reg[0]) && !in_array($magia_tablas, $path_temas)) {
                    echo '<tr>        
                        <td>' . $i . '</td>
                        <td><b>' . $reg[0] . '</b><br>' . $path_temas . '/' . $reg[0] . '</td>
                        <td>Detalles</td>

                                     
                    </tr>';
                } else {
                    echo '<tr>                                               
                            <td>' . $i . '</td>                            
                            <td><b>' . $reg[0] . '</b><br>' . $path_temas . '/' . $reg[0] . '</td>                                                        
                            <td>
                                <a href="index.php?p=base_tema_crear&nombrePlugin=' . $reg[0] . '&ubicacion=' . $ubicacion . '&padre=' . $padre . '&label=' . $reg[0] . '">Crear Modelo</a>
                            </td>
                        </tr>';
                }
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>

