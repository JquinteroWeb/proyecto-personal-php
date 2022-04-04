<?php
include('../includes/header.php');
?>



  
  <div class="container">
    <h1>Formulario cliente</h1>
    <form action="../controller/empleadorControlador.php" method="POST">
      <div class="row">
        <div class="col-6">
          <label for="TXT_NOMBRE" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="TXT_NOMBRE" id="TXT_NOMBRE" placeholder="Ingresa tu nombre...">
        </div>
        <div class="col-6">
          <label for="TXT_APELLIDO" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="TXT_APELLIDO" id="TXT_APELLIDO" placeholder="Ingresa tu apellido...">
        </div>
      </div>
      <div class="row">
          <div class="col-6">
            <label for=" TXT_PAIS" class="form-label">Pais</label>
            <input type="text" class="form-control" name="TXT_PAIS" id="TXT_PAIS" placeholder="Ingresa tu pais...">
            
          </div>
            <div class="col-6">
              <label for="TXT_EDAD" class="form-label">Edad</label>
              <input type="text" class="form-control" name="TXT_EDAD" id="TXT_EDAD"  placeholder="Ingresa tu edad...">
              
            </div>
      </div>
      <br>
      <div class="col-12">
        <div class="d-grid gap-2">
                <button type="submit" name="BTN_CREAR_EMPLEADO" id="BTN_CREAR_EMPLEADO" class="btn btn-primary" onclick="return confirm('¿Quiere guardar?');">Enviar</button>
              </div>    
         </div>     
    </form>
  </div>


  <?php
  include('../includes/footer.php');
  ?>