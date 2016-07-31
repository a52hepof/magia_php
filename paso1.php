<?php include "./header.php"; ?>



<h2>Crear el proyecto</h2>

<p>El path es el lugar donde magia instalara el proyecto, este es generalmente la 
raiz de tu sitio web</p>

<p>Ejemplo: /var/www/html/miweb O en ocaciones: /home/[usuario]/public_html 
    Magia detecto que tu path es: <b>PATH</b>, si esto es incorrecto puedes
modificarlo</p>



<form class="form" method="get" action="paso2.php">
    
  <div class="form-group">
    <label for="magia_path">Path de instalacion</label>
    <input 
        type="text" 
        class="form-control" 
        id="magia_path" 
        placeholder="Ejemplo: /var/www/html">
  </div>

    
    
  <button type="submit" class="btn btn-primary">
  Siguiente
  </button>
  
</form>





<?php include "./footer.php"; ?>