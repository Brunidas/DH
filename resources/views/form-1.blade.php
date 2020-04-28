<?php

$dsn = "mysql:dbname=dh_salud;host=localhost;port=3306";
$user = "root";
$pass = "root";

try {
    $db = new PDO($dsn,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo "Error de conexion :(";exit;
}
    session_start();


    // VALIDAR FORMULARIO
    if ($_POST) {

        function validarDatos(&$datosCorrectos, &$datos, &$errores, $db){

            // validar usuario
            if (strlen($datos["usuario"]) == 0) {

                $errores["usuario"]= "El usuario no puede quedar vacio";
                $datosCorrectos = false;

            }else{
                if (!preg_match("/^[a-zA-Z ]*$/", $datos["usuario"])) {

                    $errores["usuario"]= "Solo se puede usar texto";
                    $datosCorrectos = false;

                }else{
                    $datos["usuario"] = filter_var($datos["usuario"], FILTER_SANITIZE_STRING);

                    //consulta a la base de datos
                    $consulta = $db->prepare("SELECT usuario FROM usuarios");
                    $consulta->execute();
                    $resultado =$consulta->fetchAll(PDO::FETCH_ASSOC);


                    foreach ($resultado as $index => $columna) {
                        if( $datos["usuario"] == $columna["usuario"] ){

                            $errores["usuario"]= "Nombre de usuario ya registrado";
                            $datosCorrectos = false;
                            break;
                        }
                    }



                }
            }


            // validar email
            if (strlen($datos["email"]) == 0) {
                $datosCorrectos = false;
                $errores["email"] = "El email no puede quedar vacio";
            } else {
                $datos["email"] = filter_var($datos["email"], FILTER_VALIDATE_EMAIL);
            }


            //validar nombre
            if (strlen($datos["nombre"]) == 0) {
                $datosCorrectos = false;
                $errores["nombre"] = "El nombre no puede quedar vacio";
            } else {
                $datos["nombre"] = filter_var($datos["nombre"], FILTER_SANITIZE_STRING);
            }


            //validar apellido
            if (strlen($datos["apellido"]) == 0) {
                $datosCorrectos = false;
                $errores["apellido"] = "El apellido no puede quedar vacio";
            } else {
                $datos["apellido"] = filter_var($datos["apellido"], FILTER_SANITIZE_STRING);
            }



            //validar dni
            if (strlen($datos["dni"]) == 0) {
                $datosCorrectos = false;
                $errores["dni"] = "El DNI no puede quedar vacio";
            } else {
                if (is_numeric($datos["dni"])) {
                    if ($datos["dni"] < 0 ) {
                        $datosCorrectos = false;
                        $errores["dni"] = "El DNI no puede ser menor a cero";
                    } else {
                        $datos["dni"] = filter_var($datos["dni"], FILTER_SANITIZE_STRING);
                    }
                } else {
                    $datosCorrectos = false;
                    $errores["dni"] = "El DNI deber ser un numero";
                }
            }



            //validar contraseña
            if( isset($datos["contrasenia"]) ) {
                if( empty($datos["contrasenia"]) ) {
                    $errores['contrasenia'] = "La contraseña no puede quedar vacia";
                    $datosCorrectos = false;
                }else {
                    if( strlen($datos["contrasenia"]) < 6 ){
                        $datosCorrectos = false;
                        $errores['contrasenia'] = "Tu contraseña debe tener al menos 6 caracteres.";
                    }else{
                        if($datos["contrasenia"] != $datos["repetirContrsenia"]){
                            $datosCorrectos = false;
                            $errores['contrasenia'] = "Tienes que ingresar la misma contraseña";
                        }else{
                            $datos["contrasenia"] = password_hash($datos["contrasenia"], PASSWORD_DEFAULT);
                        }
                    }
                }
            }


        }



        $datosCorrectos = true;

        $datos=[
            "usuario" => $_POST["usuario"],
            "email" => $_POST["email"],
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"],
            "dni" => $_POST["dni"],
            "contrasenia" => $_POST["contrasenia"],
            "repetirContrsenia" => $_POST["repetirContrsenia"]
        ];

        $errores = [
            "usuario" => "",
            "email" => "",
            "nombre" => "",
            "apellido" => "",
            "dni" => "",
            "contrasenia" => "",
            "repetirContrsenia" => ""
        ];




        //llamada a al funcion
        validarDatos($datosCorrectos, $datos, $errores, $db);




        //guardar usuario
        if($datosCorrectos){
            echo "Todos los datos en bien :D";echo "<br>";

            echo "DATOS INGRESADOS:";echo "<br>";
            foreach ($datos as $key => $value) {
                echo "$key:  $value <br>" ;
            }


            //guardar en base de datos

            $usuario = $datos["usuario"];
            $email = $datos["email"];
            $nombre = $datos["nombre"];
            $apellido = $datos["apellido"];
            $dni = $datos["dni"];
            $contrasenia = $datos["contrasenia"];

            $consulta = $db->prepare("INSERT INTO `dh_salud`.`usuarios` (`usuario`, `contrasenia`, `mail`, `nombre`, `apellido`, `documento`, `administrador`) VALUES ('$usuario', '$contrasenia', '$email', '$nombre', '$apellido', '$dni', '0')");




            // $consulta->bindValue(':usuario',$usuario);
            // $consulta->bindValue(':contrasenia',$contrasenia);
            // $consulta->bindValue(':email',$email);
            // $consulta->bindValue(':nombre',$nombre);
            // $consulta->bindValue(':apellido',$apellido);
            // $consulta->bindValue(':dni',$dni);

            $consulta->execute();


        }





        // echo $email ."<br>";
        // echo $nombre."<br>";
        // echo $apellido."<br>";
        // echo $dni."<br>";
        // echo $contrasenia."<br>";
        // echo $repetirContrsenia."<br>";







    }

?>





@extends("plantilla")

@section("titulo")
  Dh-Salud
@endsection

@section("principal")


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
            <form class="_bf_form col-12 m-3 " action="003form-1.php" method="POST" enctype="multipart/form-data">
                <!-- usuario -->
                <div class="col-12 d-flex justify-content-center mt-5  mb-2">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 "  id="usuario" type="text" name="usuario" placeholder="Usuario" value="">
                </div>
                <p></p>

                <!-- Email -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="email" type="text" name="email" placeholder="E-mail" value="">
                </div>
                <p></p>


                <!-- nombre -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="nombre" type="text" name="nombre" placeholder="Nombre" value="">
                </div>

                <p></p>


                <!-- apellido -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 " id="apellido" type="text" name="apellido" placeholder="Apellido" value="">
                </div>
                <p></p>


                <!-- dni -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="dni" type="text" name="dni" placeholder="DNI" value="">
                </div>
                <p></p>




                <!-- Contraseña -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 mb-1 w-100" type="password" id="contrasenia" name="contrasenia" placeholder="Contraseña">
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="repetirContrsenia" type="password" name="repetirContrsenia" placeholder="Repetir Contraseña">
                </div>
                <p></p>






                <!-- Boton Enviar -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="submit" name="" value="" class="_bf_enviarFomulario pt-1 pb-1 pl-3 pr-3 w-100">
                        Registrarse
                    </button>
                </div>

                <div class="_bf_textoDebajoBoton col-12 d-flex justify-content-center mb-5">
                    ¿Ya eres usuario? <a class="ml-1" href="005login.php">Click aquí</a>
                </div>

            </form>


        </div>


    </div>


@endsection
