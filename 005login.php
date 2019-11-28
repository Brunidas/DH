<!DOCTYPE html>
<html lang="es">

<?php include_once "components/head.php"; ?>

<body>

  <?php include_once "components/header.php"; ?>

  <div class="container">
    <div class="_bf_titulos">
      <h2><img src="img/icons/usuario-icono.png" alt="" class="text-black-50"></h2>
      <h1 class="_bf_titulos">Ingresar</h1>
    </div>

    <div class="row d-flex flex-wrap justify-content-around">

      <div class="col-sm-8 col-md-7 col-lg-6 d-flex justify-content-center"><span class="border border-white"></span>
        <button class="_bf_login" type="submit">
          <form class="btn btn-light" action="index.html" method="post">
            <p><label for="correo">Correo electrónico</label>
              <input type="email" name="correo" value="">
            </p>
            <p><label for="password">Contraseña</label>
              <input type="password" name="password" value="">
            </p>
            <p><input type="submit" name="inicio" value="Iniciar sesión" class="btn btn-primary">
            </p>
          </form>
        </button>
        <br>
      </div>
      <div class="container">
        <div class="row d-flex flex-wrap justify-content-around" "col-sm-8 col-md-7 col-lg-6 d-flex justify-content-center">
          <p> <input type="checkbox" name="seguirconectado" value="Seguir conectado">
            <label for="seguirconectado">Mantenerme conectado</label>
          </p>
          <p>Si olvidó su contraseña haga click aquí</p>

        </div>
      </div>
    </div>
    <?php include_once "components/footer.php"; ?>
    <?php include_once "components/scripts.php"; ?>
</body>

</html>