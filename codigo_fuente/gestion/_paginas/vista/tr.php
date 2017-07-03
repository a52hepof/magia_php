<?php

/**
  magia_version: 0.0.8
 * */
echo ' <tr>
    <td>' . $i . '</td> 
 <td>' . $_paginas_pagina . '</td> ';


foreach (_grupos_array() as $key => $grupo) {
    echo '<td>'. permisos_obtiene_permiso($_paginas_pagina, $grupo).'</td>';
}


echo'<td>
<a href=' . $_SERVER['PHP_SELF'] . '?p=_paginas&c=ver&_paginas_id=' . $_paginas_id . '>Ver</a> |  
<a href=' . $_SERVER['PHP_SELF'] . '?p=_paginas&c=editar&_paginas_id=' . $_paginas_id . '>Editar</a>  
                      
                </td></tr>';
