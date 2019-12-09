<?php

    session_start();
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

    // validacion del formulario
    if ($_POST) {

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

            $cont = 0;

            // nombre
            if (strlen($nombre) == 0) {
                $errores["nombre"] = "El nombre no puede quedar vacio";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $nombre)) {
                    $errores["nombre"] = "El nombre debe estar en un formato correcto";
                } else {
                    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
                    $cont++;
                    echo 'Nombre: ' . $nombre . '<br>';
                }
            }

            // apellido
            if (strlen($apellido) == 0) {
                $errores["apellido"] = "El apellido no puede quedar vacio";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $apellido)) {
                    $errores["apellido"] = "El apellido debe estar en un formato correcto";
                } else {
                    $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
                    echo 'apellido: ' . $apellido . '<br>';
                }
            }

            // usuario
            if (strlen($usuario) == 0) {
                $errores["usuario"] = "El usuario no puede quedar vacio";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $usuario)) {
                    $errores["usuario"] = "En el usuario solo se puede usar texto";
                } else {
                    $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
                    echo 'usuario: ' . $usuario . '<br>';
                }
            }

            // edad
            if (strlen($edad) == 0) {
                $errores["edad"] = "La edad no puede quedar vacia";
            } else {
                if (is_numeric($edad)) {
                    if ($edad < 0) {
                        $errores["edad"] = "La edad no puede ser menor a cero";
                    } else {
                        $edad = filter_var($edad, FILTER_SANITIZE_STRING);
                        echo 'Edad: ' . $edad . '<br>';
                    }
                } else {
                    $errores["edad"] = "La edad deber ser un numero";
                }
            }

            // D.N.I.
            if (strlen($DNI) == 0) {
                $errores["DNI"] = "El DNI no puede quedar vacio";
            } else {
                if (is_numeric($DNI)) {
                    if ($DNI < 0) {
                        $errores["DNI"] = "El DNI no puede ser menor a cero";
                    } else {
                        $DNI = filter_var($DNI, FILTER_SANITIZE_STRING);
                        echo 'DNI :' . $DNI . '<br>';
                    }
                } else {
                    $errores["DNI"] = "El DNI deber ser un numero";
                }
            }


            // direccion
            if (strlen($direccion) == 0) {
                $errores["direccion"] = "La direccion no puede quedar vacia";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $direccion)) {
                    $errores["direccion"] = "La direccion debe estar en un formato correcto";
                } else {
                    $direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
                    echo 'Direccion: ' . $direccion . '<br>';
                } // REVISAR ESTA VALIDACION para que incluya numeros
            }

            // localidad
            if (strlen($localidad) == 0) {
                $errores["localidad"] = "La localidad no puede quedar vacia";
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $localidad)) {
                    $errores["localidad"] = "Por favor no utilizar comas, tildes, ni caracteres especiales"; // por favor no utilizar acentos ni comas
                } else {
                    $localidad = filter_var($localidad, FILTER_SANITIZE_STRING);
                    echo 'dire$localidad: ' . $localidad . '<br>';
                }
            }

            // celular
            if (strlen($celular) == 0) {
                $errores["celular"] = "El número de celular no puede quedar vacio";
            } else {
                if (is_numeric($celular)) {
                    if (strlen($celular) != 10) {
                        $errores["celular"] = "El número debe tener exactamente 10 digitos";
                    } else {
                        $celular = filter_var($celular, FILTER_SANITIZE_STRING);
                        echo 'Cel :' . $celular . '<br>';
                    }
                } else {
                    $errores["celular"] = "El número de celular debe ser un numero";
                }
            }

            // email
            if (strlen($email) == 0) {
                $errores["email"] = "El email no puede quedar vacio";
            } else {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo 'email: ' . $email . '<br>';
                } else {
                    $errores["email"] = "El email debe estar en un formato correcto";
                }
            }

            // contraseña
            if( isset($contrasenna) ) {
                if( empty($contrasenna) ) {
                    $contrasenna = "Este campo debe completarse.";
                }
                elseif( strlen($contrasenna) < 6 ) {
                    $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres.";
                }
            }

            if( isset($contrasenna) ) {
                if( empty($contrasenna) ) {
                    $contrasenna = "Este campo debe completarse.";
                }
                elseif($contrasenna != $rContrasenna) {
                    $rContrasenna = "Tenés que ingresar la misma contraseña";
                }
            }




        }


    if($_POST) {

            if(count($errores) === 0) { /// Datos que pasaan a la base de DATOS
                // REGISTRO AL USUARIO
                $usuarioFinal = [
                    'nombre' => trim($nombre),
                    'apellido' => $apellido,
                    'celular' =>  $celular,
                    //'obraSocial' =>$obrasSociales,
                    'usuario' =>  $usuario,
                    'email' =>  $email,
                    'dni' =>  $DNI,
                    'edad' =>  $edad,
                    'password' => password_hash($contrasenna, PASSWORD_DEFAULT)


                    ];

                    if($_FILES) {
                    if($_FILES["imagen"]["error"]!=0){
                    echo "Hubo un error al cargar la imagen <br>";
                    } else{
                    $ext=strtolower(pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION));
                    if ($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
                        echo "La imagen debe ser jpg, jpeg o png <br>";
                    } else{
                        move_uploaded_file($_FILES["imagen"]["tmp_name"],"archivos/".$usuario."." .$ext);
                    }
                    }
                    }

                // ENVIAR A LA BASE DE DATOS $usuarioFinal
                $jsonDeUsuario = json_encode($usuarioFinal);
                file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
                header("Location: 005login.php");// Lugar del sitio que pasa cuando se logea
                exit;
            }
            }
    // }




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
                <img class="mt-3 rounded mx-auto d-block" src="img/DHSALUD-logo-small.png" alt="">
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
                <?php if ($errores["nombre"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["nombre"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>


                <!-- apellido -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 " id="apellido" type="text" name="apellido" placeholder="Apellido" value="<?= $apellido ?>">
                </div>
                <?php if ($errores["apellido"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["apellido"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- usuario -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 "  id="usuario" type="text" name="usuario" placeholder="Usuario" value="<?= $usuario ?>">
                </div>
                <?php if ($errores["usuario"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["usuario"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>





                <!-- edad -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="edad" type="text" name="edad" placeholder="Edad" value="<?= $edad ?>">
                </div>
                <?php if ($errores["edad"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["edad"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- DNI -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="DNI" type="text" name="DNI" placeholder="DNI" value="<?= $DNI ?>">
                </div>
                <?php if ($errores["DNI"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["DNI"] ?>
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
                <?php if ($errores["direccion"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["direccion"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>

                <!-- Localidad -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="localidad" type="text" name="localidad" placeholder="Localidad" value="<?= $localidad ?>">
                </div>
                <?php if ($errores["localidad"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["localidad"] ?>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <p></p>




                <!-- Celular -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="celular" type="text" name="celular" placeholder="Celular" value="<?= $celular ?>">
                </div>
                <?php if ($errores["celular"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["celular"] ?>
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
                <?php if ($errores["email"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["email"] ?>
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

                <?php if ($errores["contrasenna"] != "") : ?>
                    <div class="error">
                        <ul>
                            <li>
                                <?= $errores["contrasenna"] ?>
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
