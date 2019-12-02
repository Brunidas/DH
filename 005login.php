<!DOCTYPE html>
<html lang="es">

<?php include_once "components/head.php"; ?>

<body>

  <?php include_once "components/header.php"; ?>
  <div class="container">
  <br>
    <div class="_bf_titulos-mobile row mb-4 justify-content-center">
      
      <h1 class="">Ingresar</h1>
    </div>
    <div class="_bf_titulos ">
    <h1 class="">Ingresar</h1>
    </div>

    <br>
    <br>


    <section class="">

      <div class="text-center mb-4 pt-5">
        
          <form class="btn btn-light" action="index.html" method="post">
          <div class="text-left ">
            <label for="correo">Tu correo </label>
              <input type="email" name="correo" value="" class="ml-4">
              </div>
            <div class="text-left mt-3">
            <label for="password">Contraseña</label>
              <input type="password" name="password" value="" class="ml-1" >
              </div>
              <br>
              <small class="text-muted">¿Olvidó su contraseña?</small>
              <div class="mt-3">
            <input type="checkbox" name="seguirconectado" value="Seguir conectado"> 
                    <label for="seguirconectado">Mantenerme conectado</label> </div>
              <div>
            <input type="submit" name="inicio" value="Iniciar sesión" class="btn btn-primary mt-3">
            </div>
            
          </form>
      </div>
       
      </section>
      <br>
      <br>
      <br>
              
    </div>

  
<?php include_once 'components/footer.php' ?>
<?php include_once "components/scripts.php"; ?>
</body>



</html>