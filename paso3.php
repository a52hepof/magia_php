<?php include "./header.php"; ?>


<?php 

for($i=0; $i<count($plugins_carpetas); $i++){
    echo "<p>$plugins_carpetas[$i]</p>";
    $carpeta = $plugins_carpetas[$i];
    
    for($c=0; $c<count($controlador); $c++){
        echo "<p>-----$controlador[$c]</p>"; 
    }
    
}

?>


















<h2>Crear plugins</h2>

<p>Lista de las tablas prsentes en tu base de datos</p>

<form class="form-horizontal" method="get" >



    <ul class="list-group">

        <li class="list-group-item list-group-item-success">
            <input type="checkbox" name="tabla" checked=""> 
            Dapibus ac facilisis in
        </li>


        <?php
        for ($i = 0; $i < 3; $i++) {
            ?>
            <li class="list-group-item list-group-item-info">
                <input type="checkbox" name="tabla" checked="" > 

                Cras sit amet nibh libero



                <a class="btn btn-primary btn-xs" 
                   role="button" 
                   data-toggle="collapse" 
                   href="#detalles_<?php echo "$i"; ?>" 
                   aria-expanded="false" 
                   aria-controls="collapseExample">
                    ?
                </a>




                <div class="collapse" id="detalles_<?php echo "$i"; ?>">

                    


                    <ul class="list-group">
                        
 
                        
                        
                        <li class="list-group-item">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            Controlador                        
                        </li>
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Ver.php <?php ventana($i) ?></li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        <li 
                            class="list-group-item"
                            > 
                            
                            &nbsp; &nbsp; &nbsp; &nbsp;
                            
                            <span class="glyphicon glyphicon-file"></span>
                            Dapibus ac facilisis in</li>
                        
                        
                        
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>

                </div>

            </li>










            <?php
        }
        ?>



        <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
        <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>



        <li class="list-group-item list-group-item-success">
            <input type="checkbox" name="tabla" checked=""> 
            Todas
        </li>



    </ul>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>

























<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>















<?php

function ventana($p) {
    echo '
<!-- Button trigger modal -->
<button 
type="button" 
class="btn btn-primary btn-xs" 
data-toggle="modal" 
data-target="#myModal_' . $p . '">
  ? ' . $p . '
</button>

<!-- Modal -->
<div class="modal fade" id="myModal_' . $p . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
            Modal title ' . $p . '
        </h4>
      </div>
      <div class="modal-body">
          <pre>
es el codio de ' . $p . '


          </pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>';
}
?>
















<?php include "./footer.php"; ?>