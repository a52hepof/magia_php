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
