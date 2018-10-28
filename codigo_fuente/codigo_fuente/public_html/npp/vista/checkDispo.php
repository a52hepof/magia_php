<?php include "header.php"; ?>


<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">07h00 - 12h00 +</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    <?php
    $i = 1;
    while ($parkings = mysql_fetch_array($sql)) {
        include "gestion/parkings/reg/reg.php";
        include "public_html/npp/vista/checkDispoItem.php";

        $i++;
    }
    ?>



    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">13h00 - 24h00</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


</div>






<?php include "footer.php"; ?>