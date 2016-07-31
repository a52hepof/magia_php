<?php


function formularios_campo_escondido($nombre,$valor){    
    echo '<input type="hidden" name="'.$nombre.'" value="'.$valor.'">'; 
}


function formularios_campo($tipo, $nombre, $id, $valor="", $clase="", $placeholder=""){    
    echo '<input 
                type="'.$tipo.'" 
                name="'.$nombre.'" 
                value="'.$valor.'" 
                id="'.$id.'"                 
                class="'.$clase.'"                                     
                placeholder="'.$placeholder.'" > '; 
}
function formularios_opciones(){
    
}


function _formulario_texto($nombre, $marca_agua="",$valor="", $desactivar=false, $clase="form-control") {    
    
    $desactivado    = ($desactivar)? " disabled " : "";
    //$clase          = ($clase)? " form-control " : "";
    
    return "<input "
            . "type=\"text\" "
            . "class=\"$clase\" "
            . "name=\"$nombre\" "
            . "id=\"$nombre\" "
            . "placeholder=\"$marca_agua\" "
            . "value=\"$valor\" $desactivado > ";
}


function _formulario_opciones($tabla, $campo, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        echo "<option ";
        if ($selecionado == $reg[0]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $reg[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$reg[0]\">$reg[0]</option>";
    }
}

function _formulario_radio($tabla, $campo, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        echo "<input ";
        if ($selecionado == $reg[0]) {
            echo " checked ";
        } else {
            echo "";
        }
        if ($excluir == $reg[0]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "type=\"radio\" name=\"$campo\" id=\"$reg[0]\" value=\"$reg[0]\" ><label for=\"$reg[0]\">$reg[0]</label> \n";
    }
}

function _formulario_checkbox($tabla, $campo, $selecionar = "", $desactivar = "",$excluir="") {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM $tabla  ", $conexion) or die("Error:" . mysql_error());
    while ($reg = mysql_fetch_array($sql)) {

        $seleccionado   =  ($selecionar == $reg[0]) ? " checked " : "" ;
        $excluido       =  ($excluir == $reg[0]) ? true : false ;
        $desactivado    =  ($desactivar == $reg[0]) ? " disabled " : "" ;
        
        if(!$excluido){
        echo "<input "
        . "$seleccionado "
                . "$excluido "
                . "$desactivado "
                . "type=\"checkbox\" "
                . "name=\"$reg[0]\" "
                . "id=\"$reg[0]\" "
                . "value=\"$reg[0]\" >"
                . "<label for=\"$reg[0]\">$reg[0]</label>\n ";
        }
    }
}


