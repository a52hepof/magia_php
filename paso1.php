<?php include "./header.php"; ?>



<h2>Crear el proyecto</h2>






<form class="form" method="get" action="paso2.php">
    
  <div class="form-group">
    <label for="magia_path">Path de instalacion</label>
    <input 
        type="text" 
        class="form-control" 
        id="magia_path" 
        placeholder="Ejemplo: /var/www/html"
        value="<?php echo $_SERVER['DOCUMENT_ROOT']?>/magia_blog">
  </div>

    
    
  <button type="submit" class="btn btn-primary">
  Siguiente
  </button>
  
</form>





<?php include "./footer.php"; ?>