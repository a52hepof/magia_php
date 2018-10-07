<?php

$sql = "SHOW COLUMNS FROM $nombrePlugin";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    //":tabla" => "$nombrePlugin"
        )
);
$resultado = $stmt->fetchAll();
