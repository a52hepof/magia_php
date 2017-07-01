<h1>Hola, Bienvenidos</h1>


<ol>
    <li><a href="index.php?p=configBd">Configura la base de datos</a></li>    
    <li><a href="index.php?p=config">Define rutas de los plugins</a></li>    
    <li><a href="index.php?p=copiar_bd&base_datos=bd_extructura">Copiar base.sql (grupos, idiomas, paginas, permisos, usuarios)</a></li>
    <li><form action="index.php" method="get">
            <input type="hidden" name="p" value="copiar_bd">
            
            <select name="base_datos">
                <option >Copiar Base datos ejemplo</option>
                <option value="bd_modelo_facturas">Facturas</option>
            </select>
            <input type="submit" value="ok">
        </form></li>    
    <li>chmod -R7 777 <?php echo "$path_web"; ?></a></li>    
    <li><a href="index.php?p=crear_proyecto">Crear proyecto</a></li>    
    <li>chmod -R7 777 <?php echo "$path_web"; ?></a></li>  
    <li>Crear plugin de <b>_opciones</b> primero</li>            
    <li><a href="index.php?p=plugins_lista">Crear plugin</a></li>            
</ol>