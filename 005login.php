<?php
session_start();


$arrayDeErrores = [];

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        $arrayUsuarios = file_get_contents("usuarios.json");
        $arrayUsuarios = explode(PHP_EOL, $arrayUsuarios);
        array_pop($arrayUsuarios);
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);
            if($_POST['email'] == $userFinal['email']) {
                if(password_verify($_POST['password'], $userFinal['password'])) {   
                  //echo " Usuario. ".$usarFinal["nombre"]
                    // Crearle una sesion
                    $_SESSION['email'] = $userFinal['email'];
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
                        // Unix time
                        setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                   
                    //echo $Usuario;
                    header("Location: 004profile.php");
                    exit;
                }
            }
        }
    }
}

function validarRegistracion($unArray) {

    $errores = [];

    // Validamos campo "nombre"
    if( isset($unArray['nombre']) ) {
        if( empty($unArray['nombre']) ) {
            $errores['nombre'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['nombre']) < 2 ) {
            $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres.";
        }
    }

    // Validamos campo "email"
    if( isset($unArray['email']) ) {
        if( empty($unArray['email']) ) {
            $errores['email'] = "Este campo debe completarse.";
        }
        elseif( !filter_var($unArray['email'], FILTER_VALIDATE_EMAIL) ) {
            $errores['email'] = "Debés ingresar un email válido.";
        }
    }

    if( isset($unArray['password']) ) {
        if( empty($unArray['password']) ) {
            $errores['password'] = "Este campo debe completarse.";
        }
        elseif( strlen($unArray['password']) < 6 ) {
            $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres.";
        }
    }

    return $errores;
}

function persistirDato($arrayE, $campo) {
    if( isset($arrayE[$campo]) ) {
        return "";
    } else {
        if(isset($_POST[$campo])) {
            return $_POST[$campo];
        }
    }
}

function armarArrayUsuario() {

}


?>

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
        
          <form class="btn btn-light" action="" method="post">
          <div class="text-left ">
            <label for="email">Tu correo </label>
              <input type="email" value="" class="ml-4" id="email" name="email">
              </div>
            <div class="text-left mt-3">
            <label for="password">Contraseña</label>
              <input type="password" name="password" value="" class="ml-1" id="password" name="password" >
              </div>
              <br>
              <!-- <small class="text-muted">¿Olvidó su contraseña?</small> --> 
           <div class="mt-3">
            <input type="checkbox" name="seguirconectado" value="Seguir conectado"> 
            <label class="form-check-label" for="autoSizingCheck2">
          Recordar usuario
        </label> </div>
              <div>
            <input type="submit" name="" value="Iniciar sesión" class="btn btn-primary mt-3">
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