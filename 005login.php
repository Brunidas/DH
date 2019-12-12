<?php
    session_start();

    $usuarioCorreo = "";
    $contrasenna = "";

    $errores=[
        "usuarioCorreo"=>"",
        "contrasenna"=>""
    ];
    $datosCorrectos=true;

    $erroresYDatosCorrectos=[
        $datosCorrectos,
        $errores
    ];

    function validarIngreso($datosCorrectos, $errores){
        $usuarioCorreo = $_POST["usuarioCorreo"];
        $contrasennaIngresada = $_POST["contrasenna"];


        // usuario o correo
        if (strlen($usuarioCorreo) == 0) {
            $datosCorrectos = false;
            $errores["usuarioCorreo"] = "Este campo no puede quedar vacio";
        } else {
            // traigo los usuarios cargados en el json
            $usuarios = file_get_contents("usuarios.json");
            $usuariosArray = json_decode($usuarios,true);


            foreach ($usuariosArray as $usuario){
                if($usuario["usuario"]==$usuarioCorreo || $usuario["email"]==$usuarioCorreo){
                    $datosCorrectos = true;
                    $errores["usuarioCorreo"] = "";
                    $contrasennaGurdada = $usuario["contrasenna"];
                    break;
                }else{
                    $datosCorrectos = false;
                    $errores["usuarioCorreo"] = "Usuario o Correo no encontrado";
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

        $usuarioCorreo = $_POST["usuarioCorreo"];
        $contrasenna = $_POST["contrasenna"];


        $erroresYDatosCorrectos = validarIngreso($datosCorrectos, $errores);


        if ( $erroresYDatosCorrectos[0] ){

            // creo la sesion
            $_SESSION["usuarioCorreo"] = $usuarioCorreo;


            // en caso de indicar que se guarde la session
            if( isset( $_POST["recordarUsuario"] )  && $_POST["recordarUsuario"]=="on"){

                // crea la cookie del usuario del correo
                setcookie('usuarioCorreo', $usuarioCorreo, time()+ 60 * 60 * 24 * 7 );

                // crea la cookie del la contraseña
                $usuarios = file_get_contents("usuarios.json");
                $usuariosArray = json_decode($usuarios,true);
                foreach ($usuariosArray as $usuario){
                    if($usuario["usuario"]==$usuarioCorreo || $usuario["email"]==$usuarioCorreo){
                        $contrasennaGurdada = $usuario["contrasenna"];
                        break;
                    }
                }
                setcookie("contrasenna",$contrasennaGurdada, time()+ 60 * 60 * 24 * 7);
            }



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


                <!-- Usuario o correo -->
                <div class="col-12 d-flex justify-content-center mt-5  mb-2 ">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" type="text" name="usuarioCorreo" placeholder="Ingresa Usuario o Correo" value="<?= $usuarioCorreo ?>"   >
                </div>
                <?php if ($erroresYDatosCorrectos[1]["usuarioCorreo"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["usuarioCorreo"] ?>
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
                    <input class="_bf_checkbox" type="checkbox" id="seguirconectado"  name="recordarUsuario">

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