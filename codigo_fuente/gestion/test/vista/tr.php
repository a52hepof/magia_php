<?php 
 /**  
 magia_version: 0.0.8 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, test_campos_a_mostrar())) {
                                echo "<td>$test[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=test&c=ver&test_id='.$test_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=test&c=editar&test_id='.$test_id.'>'._tr("Editar").'</a>  
                      
                </td>';  