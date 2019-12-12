<?php

    // session_start();
    
    
    $nombre = "";
    $apellido = "";
    $usuario = "";
    $edad = "";
    $DNI = "";
    $direccion = "";
    $localidad = "";
    $celular = "";
    $email = "";

    $sexos = [
        "m" => "Masculino",
        "f" => "Femenino"
    ];
    $obrasSociales = [
        "os" => "Osep",
        "ga" => "Galeno",
        "ci" => "Cimesa",
        "os" => "Osde",
        "ss" => "Sancor Salud",
        "na" => "Ninguna"
    ];
    
    $datosCorrectos=true;
    
    $errores = [
        "nombre" => "",
        "apellido" => "",
        "usuario" => "",
        "edad" => "",
        "DNI" => "",
        "sexo" => "",
        "direccion" => "",
        "localidad" => "",
        "celular" => "",
        "obraSocial" => "",
        "email" => "",
        "contrasenna" => ""
    ];

    //contiene el array de datos correctos y de los errores
    $erroresYDatosCorrectos=[
        $datosCorrectos,
        $errores
    ];  

    // validacion del formulario
    if ($_POST) {        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $usuario = $_POST["usuario"];
        $edad = $_POST["edad"];
        $DNI = $_POST["DNI"];
        $sexo = $_POST["sexo"];
        $direccion = $_POST["direccion"];
        $localidad = $_POST["localidad"];
        $celular = $_POST["celular"];
        $obraSocial = $_POST["obraSocial"];
        $email = $_POST["email"];
        $contrasenna = $_POST["contrasenna"];
        $rContrasenna = $_POST["rContrasenna"];



        function validacionDatos($datosCorrectos, $errores){
            // variables
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $usuario = $_POST["usuario"];
            $edad = $_POST["edad"];
            $DNI = $_POST["DNI"];
            $direccion = $_POST["direccion"];
            $localidad = $_POST["localidad"];
            $celular = $_POST["celular"];
            $email = $_POST["email"];
            $contrasenna = $_POST["contrasenna"];
            $rContrasenna = $_POST["rContrasenna"];

        
            // nombre
            if (strlen($nombre) == 0) {
                $datosCorrectos = false;
                $errores["nombre"] = "El nombre no puede quedar vacio";
            } else {
                $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            }

            // apellido
            if (strlen($apellido) == 0) {
                $datosCorrectos = false;
                $errores["apellido"] = "El apellido no puede quedar vacio";
            } else {
                $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);

            }

            // usuario
            if (strlen($usuario) == 0) {
                $datosCorrectos = false;
                $errores["usuario"] = "El usuario no puede quedar vacio";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $usuario)) {
                    $datosCorrectos = false;
                    $errores["usuario"] = "Solo se puede usar texto";
                } else {
                    $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
                }
            }


            // edad
            if (strlen($edad) == 0) {
                $datosCorrectos = false;
                $errores["edad"] = "La edad no puede quedar vacia";
            } else {
                if (is_numeric($edad)) {
                    if ($edad < 0) {
                        $datosCorrectos = false;
                        $errores["edad"] = "La edad no puede ser menor a cero";
                    } else {
                        $edad = filter_var($edad, FILTER_SANITIZE_STRING);
                    }
                } else {
                    $datosCorrectos = false;                    
                    $errores["edad"] = "La edad deber ser un numero";
                }
            }



            // D.N.I.
            if (strlen($DNI) == 0) {
                $datosCorrectos = false;
                $errores["DNI"] = "El DNI no puede quedar vacio";
            } else {
                if (is_numeric($DNI)) {
                    if ($DNI < 0 ) {
                        $datosCorrectos = false;
                        $errores["DNI"] = "El DNI no puede ser menor a cero";
                    } else {
                        $DNI = filter_var($DNI, FILTER_SANITIZE_STRING);
                    }
                } else {
                    $datosCorrectos = false;
                    $errores["DNI"] = "El DNI deber ser un numero";
                }
            }



            // direccion
            if (strlen($direccion) == 0) {
                $datosCorrectos = false;
                $errores["direccion"] = "La direccion no puede quedar vacia";
            } else {
                $direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
            }


            // localidad
            if (strlen($localidad) == 0) {
                $datosCorrectos = false;
                $errores["localidad"] = "La localidad no puede quedar vacia";
            } else {
                $localidad = filter_var($localidad, FILTER_SANITIZE_STRING);
            }

            // celular
            if (strlen($celular) == 0) {
                $datosCorrectos = false;
                $errores["celular"] = "El número de celular no puede quedar vacio";
            } else {
                if (is_numeric($celular)) {
                    if (strlen($celular) != 10) {
                        $datosCorrectos = false;
                        $errores["celular"] = "El número debe tener exactamente 10 digitos";
                    } else {
                        $celular = filter_var($celular, FILTER_SANITIZE_STRING);

                    }
                } else {
                    $datosCorrectos = false;
                    $errores["celular"] = "El número de celular debe ser un numero";
                }
            }


            // email
            if (strlen($email) == 0) {
                $datosCorrectos = false;
                $errores["email"] = "El email no puede quedar vacio";
            } else {
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            }
         
            // contraseña
            if( isset($contrasenna) ) {
                if( empty($contrasenna) ) {
                    $errores['contrasenna'] = "La contraseña no puede quedar vacia.";
                    $datosCorrectos = false;
                }else {
                    if( strlen($contrasenna) < 6 ){
                        $datosCorrectos = false;
                        $errores['contrasenna'] = "Tu contraseña debe tener al menos 6 caracteres.";
                    }else{
                        if($contrasenna != $rContrasenna){
                            $datosCorrectos = false;
                            $errores['contrasenna'] = "Tienes que ingresar la misma contraseña";
                        }else{
                        }
                    }
                }
            }



            //retorna un array nomrmal
            return array($datosCorrectos, $errores) ;
        }

       
        $erroresYDatosCorrectos = validacionDatos($datosCorrectos, $errores) ;

        // guardar usuario
        if( $erroresYDatosCorrectos[0] ){
            
            $usuario=[
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "usuario"=>$usuario,
                'edad'=>$edad,
                'DNI'=> $DNI,
                'sexo'=>$sexo,
                'direccion'=>$direccion,
                'localidad'=>$localidad,
                'obraSocial'=>$obraSocial,
                'email'=>$email,
                'contrasenna'=>password_hash($contrasenna, PASSWORD_DEFAULT)
            ];

            $usuarios = file_get_contents("usuarios.json");

            $usuariosArray = json_decode($usuarios,true);
            $usuariosArray[]=$usuario;
        
        
            $usuariosFinal = json_encode($usuariosArray);
        
            file_put_contents('usuarios.json',$usuariosFinal);


            header("Location: 005login.php");
        } 
    }

    

?>

<!DOCTYPE html>
<html lang="es">

<!-- <head>
    <style>
        form {
            margin: auto;
            width: 400px;
            padding: 25px 20px;
            background: rgba(0, 170, 228, 0.8);
            box-sizing: border-box;
            margin-top: 20px;
            border-radius: 7px;
        }

        input {
            width: 100%;
            margin-bottom: 20;
            padding: 5px;
            box-sizing: border-box;
            font-size: 17;
            border: none;



        }

        .error {
            color: #fff;
            background: red;
        }
    </style>
</head> -->
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
            <!-- Logo DH-Salud -->
            <div class="col-12">
                <a href="001index.php">
                    <img class="mt-3 rounded mx-auto d-block" src="img/DHSALUD-logo-small.png" alt="">
                </a>
            </div>


            <div class="col-12 mt-3 d-flex justify-content-center">
                <h2 class="_bf_titulo h1 d-sm-none">Regístrate</h2>
                <h2 class="_bf_titulo display-4 d-none d-sm-block">Regístrate</h2>

            </div>

        </div>



        <div class="row d-flex justify-content-center mb-5">
            <form class="_bf_form col-12 m-3 " action="003form.php" method="POST" enctype="multipart/form-data">

                <!-- nombre -->
                <div class="col-12 d-flex justify-content-center mt-5  mb-2">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="nombre" type="text" name="nombre" placeholder="Nombre" value="<?= $nombre ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["nombre"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["nombre"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>


                <!-- apellido -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 " id="apellido" type="text" name="apellido" placeholder="Apellido" value="<?= $apellido ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["apellido"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["apellido"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- usuario -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 "  id="usuario" type="text" name="usuario" placeholder="Usuario" value="<?= $usuario ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["usuario"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["usuario"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>





                <!-- edad -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="edad" type="text" name="edad" placeholder="Edad" value="<?= $edad ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["edad"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["edad"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- DNI -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="DNI" type="text" name="DNI" placeholder="DNI" value="<?= $DNI ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["DNI"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["DNI"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>



                <!-- Sexo -->
                <div class="col">
                    <label class="_bf_colorBlanco" for="Sexo">Sexo:</label>
                    <select class="" name="sexo" id="sexo">
                        <?php foreach ($sexos as $codigo => $sexo) : ?>
                            <?php if ($_POST["sexo"] == $codigo) : ?>
                                <option value="<?= $codigo ?>" selected>
                                    <?= $sexo ?>
                                </option>
                            <?php else : ?>
                                <option value="<?= $codigo ?>">
                                    <?= $sexo ?>
                                </option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                    <p></p>
                </div>


                <!-- Direccion -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="direccion" type="text" name="direccion" placeholder="Direccion" value="<?= $direccion ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["direccion"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["direccion"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>





                <!-- Localidad -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="localidad" type="text" name="localidad" placeholder="Localidad" value="<?= $localidad ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["localidad"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["localidad"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- Celular -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="celular" type="text" name="celular" placeholder="Celular" value="<?= $celular ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["celular"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["celular"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>


                <!-- Obra Social -->
                <div class="col">
                    <label class="_bf_colorBlanco" for="obraSocial">Obra Social:</label>
                    <select class="" name="obraSocial" id="obraSocial">
                        <?php foreach ($obrasSociales as $codigo => $obrasSocial) : ?>
                            <?php if ($_POST["obraSocial"] == $codigo) : ?>
                                <option value="<?= $codigo ?>" selected>
                                    <?= $obrasSocial ?>
                                </option>
                            <?php else : ?>
                                <option value="<?= $codigo ?>">
                                    <?= $obrasSocial ?>
                                </option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                    <p></p>
                </div>



                <!-- Email -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="email" type="text" name="email" placeholder="E-mail" value="<?= $email ?>">
                </div>
                <?php if ($erroresYDatosCorrectos[1]["email"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $erroresYDatosCorrectos[1]["email"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>



                <!-- Contraseña -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 mb-1 w-100" type="password" id="contrasenna" name="contrasenna" placeholder="Contraseña">
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="rContrasenna" type="password" name="rContrasenna" placeholder="Repetir Contraseña">
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




                <!-- Imagen -->
                <div class="col">
                    <label class="_bf_colorBlanco" for="">Imagen de perfil</label>

                    <input class="_bf_colorBlanco" type="file" name="imagen" value="">
                </div>


                <!-- Boton Enviar -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="submit" name="" value="" class="_bf_enviarFomulario pt-1 pb-1 pl-3 pr-3 w-100">
                        Enviar
                    </button>
                </div>

                <div class="_bf_textoDebajoBoton col-12 d-flex justify-content-center mb-5">
                    ¿Ya eres usuario? <a class="ml-1" href="005login.php">Click aquí</a>
                </div>

            </form>


        </div>


    </div>



    <?php include_once "components/scripts.php"; ?>
</body>

</html>
