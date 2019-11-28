<?php
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
                echo 'dire$direccion: ' . $direccion . '<br>';
            }
        }

        // localidad
        if (strlen($localidad) == 0) {
            $errores["localidad"] = "La localidad no puede quedar vacia";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/", $localidad)) {
                $errores["localidad"] = "La localidad debe estar en un formato correcto";
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
        if (strlen($contrasenna) == 0 || strlen($rContrasenna) == 0) {
            $errores["contrasenna"] = "Ninguna de las contraseñas puede quedar vacia";
        } else {
            $contrasenna = password_hash($contrasenna, PASSWORD_DEFAULT);
            if (password_verify($rContrasenna, $contrasenna)) {
                echo '$rContrasenna: ' . $rContrasenna . '<br>';
                echo '$contrasenna: ' . $contrasenna . '<br>';
            } else {
                $errores["contrasenna"] = "Las contraseñas deben ser iguales";
            }
        }



    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
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
</head>



<?php include_once "components/head.php"; ?>

<body>


    <?php include_once "components/header.php"; ?>

    <div class="container">
        <div class="_bf_titulos">
            <h1 class="">Registro</h1>
        </div>



        <div class="row d-flex flex-wrap justify-content-around">
            <form action="003form.php" method="POST">

                <!-- nombre -->
                <input id="nombre" type="text" name="nombre" placeholder="Nombre" value="<?= $nombre ?>">
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
                <input id="apellido" type="text" name="apellido" placeholder="Apellido" value="<?= $apellido ?>">
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
                <input id="usuario" type="text" name="usuario" placeholder="Usuario" value="<?= $usuario ?>">
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
                <input id="edad" type="text" name="edad" placeholder="Edad" value="<?= $edad ?>">
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
                <input id="DNI" type="text" name="DNI" placeholder="DNI" value="<?= $DNI ?>">
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
                <label for="Sexo">Sexo:</label>
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



                <!-- Direccion -->
                <input id="direccion" type="text" name="direccion" placeholder="Direccion" value="<?= $direccion ?>">
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
                <input id="localidad" type="text" name="localidad" placeholder="Localidad" value="<?= $localidad ?>">
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
                <input id="celular" type="text" name="celular" placeholder="Celular" value="<?= $celular ?>">
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
                <label for="obraSocial">Obra Social:</label>
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


                <!-- Email -->
                <input id="email" type="text" name="email" placeholder="E-mail" value="<?= $email ?>">
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
                <input type="password" id="contrasenna" name="contrasenna" placeholder="Contraseña">
                <input id="rContrasenna" type="password" name="rContrasenna" placeholder="Repetir Contraseña">

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


                <input id="enviar" type="submit" value="Enviar">


                <div class="">
                    <p>¿Ya eres usuario?</p>
                    <a href="">Click aqui</a>
                </div>
            </form>


        </div>


    </div>



    <?php include_once "components/scripts.php"; ?>
    <?php include_once "components/footer.php"; ?>
</body>

</html>