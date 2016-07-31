<?php include "./header.php"; ?>



<h2>Configurar la base de datos</h2>


<p>Conección a la ase de datos</p>






<form class="form-horizontal" method="" action="paso3.php">
    
  <div class="form-group">
    <label for="servidor" class="col-sm-2 control-label">Servidor</label>
    <div class="col-sm-10">
      <input 
          type="text" 
          class="form-control" 
          id="servidor" 
          placeholder="Suele ser localhost"
          value="localhost"
          >
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="basedatos" class="col-sm-2 control-label">Base de datos</label>
    <div class="col-sm-10">
      <input 
          type="text" 
          class="form-control" 
          id="basedatos" 
          placeholder="Tu base de datos"
          value="NombreDeLaBasedeDatos"
          >
    </div>
  </div>
    
    
    <div class="form-group">
    <label for="usuario" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-10">
      <input 
          type="text" 
          class="form-control" 
          id="basedatos" 
          placeholder="El usuario"
          value="root"
          >
    </div>
  </div>
    
    <div class="form-group">
    <label for="clave" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
      <input 
          type="text" 
          class="form-control" 
          id="basedatos" 
          placeholder="Tu clave"
          value="MiClaveExtraSecreta"
          >
    </div>
  </div>
    
    
    
    
    
    
    

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Siguiente paso</button>
    </div>
  </div>
</form>







<?php include "./footer.php"; ?>