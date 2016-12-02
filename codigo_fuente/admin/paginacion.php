<?php 
/**
 * Muestra botones para la paginacion
 * @global type $conexion
 * @global type $cfg_limite_items_en_tablas Limite de items por pagina en la tabla
 * @param type $plugin
 * @param type $controlador
 * @param type $pagina
 * @return string
 */
function paginacion($plugin, $controlador, $total_items, $pagina=0){
    global $conexion, $cfg_limite_items_en_tablas, $inicia; 
    
     $total_paginas = ceil($total_items / $cfg_limite_items_en_tablas);  
    
        $html = '<nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="index.php?p='.$plugin.'" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>'; 
                
                include "./$plugin/modelos/$controlador.php";
                
                
                $i = 0;
                while ($i < $total_paginas) {
                    
                    $activo = (isset($_REQUEST['pag']) && $_REQUEST['pag']==$i  ) ? 'class="active" ' : '';                                           
                    
                    $html .="<li $activo ><a href=\"index.php?p=$plugin&c=$controlador&pag=$i\">$i</a></li>";                     
                    $i++;
                }
                
                
                $html .= '<li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>';
               
                return $html;
    
}




?>