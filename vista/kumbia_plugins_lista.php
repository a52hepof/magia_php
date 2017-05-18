<h1>KumbiaPHP - Magia</h1>

<div class="table-responsive"> 		  
    <table class="table table-striped table-hover" width="100%">
        <thead>
            <tr>
                <th> #</th>
                <th> Table</th>
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

                            <td><b>' . $reg[0]  . '</td>
                            <td>                                       
                                <a href="index.php?p=kumbia_plugins_crear&nombrePlugin=' . $reg[0] . '">Crear plugin</a></td>
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
