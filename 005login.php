<?php
    // session_start();
    // function validarRegistracion($unArray){

    //     $errores = [];

    //     // Validamos campo "nombre"
    //     if (isset($unArray['nombre'])) {
    //         if (empty($unArray['nombre'])) {
    //             $errores['nombre'] = "Este campo debe completarse.";
    //         } elseif (strlen($unArray['nombre']) < 2) {
    //             $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres.";
    //         }
    //     }

    //     // Validamos campo "email"
    //     if (isset($unArray['email'])) {
    //         if (empty($unArray['email'])) {
    //             $errores['email'] = "Este campo debe completarse.";
    //         } elseif (!filter_var($unArray['email'], FILTER_VALIDATE_EMAIL)) {
    //             $errores['email'] = "Debés ingresar un email válido.";
    //         }
    //     }

    //     if (isset($unArray['password'])) {
    //         if (empty($unArray['password'])) {
    //             $errores['password'] = "Este campo debe completarse.";
    //         } elseif (strlen($unArray['password']) < 6) {
    //             $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres.";
    //         }
    //     }

    //     return $errores;
    // }
    // function persistirDato($arrayE, $campo){
    //     if (isset($arrayE[$campo])) {
    //         return "";
    //     } else {
    //         if (isset($_POST[$campo])) {
    //             return $_POST[$campo];
    //         }
    //     }
    // }
    // function armarArrayUsuario()
    // { }
    // $arrayDeErrores = [];
    // if ($_POST) {
    //     $arrayDeErrores = validarRegistracion($_POST);
    //     if (count($arrayDeErrores) === 0) {
    //         $arrayUsuarios = file_get_contents("usuarios.json");
    //         $arrayUsuarios = explode(PHP_EOL, $arrayUsuarios);
    //         array_pop($arrayUsuarios);
    //         foreach ($arrayUsuarios as $usuarioJson) {
    //             $userFinal = json_decode($usuarioJson, true);
    //             if ($_POST['email'] == $userFinal['email']) {
    //                 if (password_verify($_POST['password'], $userFinal['password'])) {
    //                     //echo " Usuario. ".$usarFinal["nombre"]
    //                     // Crearle una sesion
    //                     $_SESSION['email'] = $userFinal['email'];
    //                     if (isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
    //                         // Unix time
    //                         setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
    //                         setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
    //                     }

    //                     //echo $Usuario;
    //                     header("Location: 004profile.php");
    //                     exit;
    //                 }
    //             }
    //         }
    //     }
    // }



?>

<?php
    $usuarioContrasenna = "";
    $contrasenna = "";
    
    $errores=[
        "usuarioContrasenna"=>"",
        "contrasenna"=>""
    ];
    $datosCorrectos=true;

    $erroresYDatosCorrectos=[
        $datosCorrectos,
        $errores
    ];  

    function validarIngreso($datosCorrectos, $errores){
        $usuarioContrasenna = $_POST["usuarioContrasenna"];
        $contrasennaIngresada = $_POST["contrasenna"];
        

        // usuario o contraseña 
        if (strlen($usuarioContrasenna) == 0) {
            $datosCorrectos = false;
            $errores["usuarioContrasenna"] = "Este campo no puede quedar vacio";
        } else {
            // traigo los usuarios cargados en el json
            $usuarios = file_get_contents("usuarios.json");
            $usuariosArray = json_decode($usuarios,true);


            foreach ($usuariosArray as $usuario){
                if($usuario["usuario"]==$usuarioContrasenna || $usuario["email"]==$usuarioContrasenna){
                    $datosCorrectos = true;
                    $errores["usuarioContrasenna"] = "";
                    $contrasennaGurdada = $usuario["contrasenna"];
                    break;
                }else{
                    $datosCorrectos = false;
                    $errores["usuarioContrasenna"] = "Usuario o Correo no encontrado";
                }
            }




        }


        // contraseña
        if(strlen($contrasennaIngresada) == 0){
            $datosCorrectos = false;
            $errores["contrasenna"] = "La contraseña no puede quedar vacia";
        }else{
            // traigo los usuarios cargados en el json
            $usuarios = file_get_contents("usuarios.json");
            $usuariosArray = json_decode($usuarios,true);

            if ( !password_verify( $contrasennaIngresada, $contrasennaGurdada) ){
                $datosCorrectos = false;
                $errores["contrasenna"] = "La contraseña ingresada es incorrecta";
            }

        }


        return array($datosCorrectos, $errores);
    }
    


    if($_POST){
        $usuarioContrasenna = $_POST["usuarioContrasenna"];
        $contrasenna = $_POST["contrasenna"];
    

        $erroresYDatosCorrectos = validarIngreso($datosCorrectos, $errores);

        if ( $erroresYDatosCorrectos[0] ){
            header("Location: 002home.php");
        }
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style-forms.css">

    <title>DH Salud</title>
</head>

<body>
    <div class="container">


        <div class="row">

            <div class="col-12">
                <a href="001index.php">
                    <img class="mt-3 rounded mx-auto d-block" src="img/DHSALUD-logo-small.png" alt="">
                </a>
            </div>


            <div class="col-12 mt-3 d-flex justify-content-center">
                <h2 class="_bf_titulo h1 d-sm-none">Ingresar</h2>
                <h2 class="_bf_titulo display-4 d-none d-sm-block">Ingresar</h2>

            </div>

        </div>



        <div class="row d-flex justify-content-center">
            <form class="_bf_form col-12  m-3" action="005login.php" method="post">
                
            
                <!-- Usuario contraseña -->
                <div class="col-12 d-flex justify-content-center mt-5  mb-2 ">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" type="text" name="usuarioContrasenna" placeholder="Ingresa Correo o Usuario" value="<?= $usuarioContrasenna ?>"   > 
                </div>
                <?php if ($erroresYDatosCorrectos[1]["usuarioContrasenna"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["usuarioContrasenna"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>



                <!-- Contraseña  -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 " type="password" name="contrasenna" placeholder="Contraseña">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["contrasenna"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["contrasenna"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>





                <div class="_bf_contrasennaOlvidada col-12 d-flex justify-content-center mb-4">
                    ¿Contraseña olivada?
                    <a class="ml-1" href="#"> Click aquí</a>
                </div>


                <!-- mt-4 mb-5 -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="submit" name="" value="" class="_bf_iniciarSesion pt-1 pb-1 pl-3 pr-3 w-100">
                        Iniciar sesión
                    </button>
                </div>





                <div class="_bf_recordarUsuario col-12">
                    <input class="_bf_checkbox" type="checkbox" id="seguirconectado" value="conectado">

                    <label class="_bf_checkbox-label" for="seguirconectado">
                        <!-- <img id="check-square"src="img/icons/check-square.png" alt="">
                    <img id="square" src="img/icons/square.png" alt=""> -->
                        Recordar usuario
                    </label>
                </div>

                <hr>



                <div class="_bf_textoDebajoBoton col-12 d-flex justify-content-center mb-5">
                    ¿Nuevo en DH Salud? <a class="ml-1" href="003form.php">Crear cuenta</a>
                </div>
            </form>

        </div>













    </div>





    <?php include_once "components/scripts.php"; ?>
</body>




</html>