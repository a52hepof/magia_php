<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
    echo ' <tr>
    <td>'.$i.'</td> 
 <td>'.$logs_fecha.'</td> 
 <td>'.$logs_usuario.'</td> 
 <td>'.$logs_p.'</td> 
 <td>'.$logs_c.'</td> 
 <td>'.$logs_a.'</td> 
 <td>'.$logs_id_pedido.'</td> 
 <td>'.$logs_argumento.'</td> 
 <td>
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=ver&logs_id='.$logs_id.'>Ver</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=logs&c=editar&logs_id='.$logs_id.'>Editar</a>  
                      
                </td></tr>';  