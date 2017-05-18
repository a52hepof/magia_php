<?php
/**
 * Consola para magia_php
 */
consola_limpiar(); 
echo "Consola de Magia_php\n"; 
echo "OPCIONES\n"; 
echo "1) Configurar la base de datos\n";
echo "2) Opcion\n"; 
echo "3) Opcion\n"; 
echo "4) Opcion\n"; 
echo "5) Opcion\n"; 

consola_escoje_opcion(); 





function consola_limpiar(){
    echo exec('clear');
}

function consola_escoje_opcion() {
    echo "Escoja una opcion \n"; 
    // leo la opcion 
    
    
    while ($opcion <1 || $opcion > 5){
        echo "Debe escojer una opcion entre 1 y 5\n"; 
        // leo la opcion 
    }
}