<?php
    $errores = [];

    // validacion del formulario
    if($_POST){
        // variables
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];
        $DNI = $_POST["DNI"];
        $direccion = $_POST["direccion"];
        $localidad = $_POST["localidad"];
        $celular = $_POST["celular"];
        $email = $_POST["email"];


        // nombre
        if( strlen($nombre) ==0  ){
            $errores[] = "El nombre no puede quedar vacio";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$nombre) ){
                $errores[] = "El nombre debe estar en un formato correcto";
            }else{
                $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
                echo'Nombre: ' .$nombre .'<br>';
            }
        }

        // apellido
        if( strlen($apellido) ==0  ){
            $errores[] = "El apellido no puede quedar vacio";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$apellido) ){
                $errores[] = "El apellido debe estar en un formato correcto";
            }else{
                $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
                echo'apellido: ' .$apellido .'<br>';
            }
        }

        // edad
        if( strlen($edad) ==0  ){
            $errores[] = "La edad no puede quedar vacia";
        } else {
            if ( is_numeric( $edad) ){
                if( $edad < 0){
                    $errores[] = "La edad no puede ser menor a cero";
                } else {
                    $edad = filter_var($edad, FILTER_SANITIZE_STRING);
                    echo'Edad: ' .$edad .'<br>';
                }
            }else{
                $errores[] = "La edad deber ser un numero";
            }
        }

        // D.N.I.
        if( strlen($DNI) ==0  ){
            $errores[] = "El DNI no puede quedar vacia";
        } else {
            if ( is_numeric( $DNI) ){
                if( $DNI < 0){
                    $errores[] = "El DNI no puede ser menor a cero";
                } else {
                    $DNI = filter_var($DNI, FILTER_SANITIZE_STRING);
                    echo'DNI :' .$DNI .'<br>';
                }
            }else{
                $errores[] = "El DNI deber ser un numero";
            }
        }


        // direccion
        if( strlen($direccion) ==0  ){
            $errores[] = "La direccion no puede quedar vacia";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$direccion) ){
                $errores[] = "La direccion debe estar en un formato correcto";
            }else{
                $direccion = filter_var($direccion, FILTER_SANITIZE_STRING);
                echo'dire$direccion: ' .$direccion .'<br>';
            }
        }

        // localidad
        if( strlen($localidad) ==0  ){
            $errores[] = "La localidad no puede quedar vacia";
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$localidad) ){
                $errores[] = "La localidad debe estar en un formato correcto";
            }else{
                $localidad = filter_var($localidad, FILTER_SANITIZE_STRING);
                echo'dire$localidad: ' .$localidad .'<br>';
            }
        }

        // celular
        if( strlen($celular) ==0  ){
            $errores[] = "El número de celular no puede quedar vacio";
        }else{
            if ( is_numeric($celular) ){
                if( strlen($celular) != 10){
                    $errores[] = "El número debe tener exactamente 10 digitos";
                }else {
                    $celular = filter_var($celular, FILTER_SANITIZE_STRING);
                    echo'Cel :' .$celular .'<br>';
                }
            }else{
                $errores[] = "El número de celular debe ser un numero";
            }
        }

        // email
        if( strlen($email) ==0  ){
                $errores[] = "El email no puede quedar vacio";
        }else {

            if( filter_var($email, FILTER_VALIDATE_EMAIL) ){
                echo'email: ' .$email .'<br>';
            }else{
                $errores[] = "El email debe estar en un formato correcto";
            }
        }

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
form{
margin:  auto;
width: 400px;
padding:25px 20px;
background: rgba(0,170,228,0.8);
box-sizing: border-box;
margin-top:20px;
border-radius:7px;
}

input{
width:100%;
margin-bottom: 20;
padding: 5px;
box-sizing: border-box;
font-size:17;
border: none;



}

.error{
    color: #fff;
    background:red;
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


                <input id="nombre" type="text" name="nombre" placeholder="Nombre">
                <p></p>
                <input id="apellido" type="text" name="apellido" placeholder="Apellido">
                <p></p>
                <input id="celular" type="text" name="edad" placeholder="Edad">
                <p></p>
                <input id="D.N.I." type="text" name="DNI" placeholder="D.N.I.">
                <p></p>
                <label for="Sexo">Sexo:</label>
                <select class="" name="sexo" id="Sexo">
                <option value="A">
                Masculino
                <option value="B">
                Femenino
                <option value="C">
                Otros
                <p></p>
                <input id="Direccion" type="text" name="direccion" placeholder="Direccion">
                <p></p>
                <input id="Localidad" type="text" name="localidad" placeholder="Localidad">
                <p></p>
                <input id="Celular" type="text" name="celular" placeholder="Celular: (###) ###-####">
                <p></p>
                <input id="email" type="text" name="email" placeholder="E-mail">
                <p></p>
                <label for="social">Obra Social:</label>

                <select class="" name="social" id="social">
                    <option value="A">
                    Osep
                    <option value="B">
                    Galeno
                    <option value="C">
                    Cimesa
                    <option value="D">
                    Osde
                    <option value="F">
                    SancorSalud
                    <option value="G">
                    Ninguna


                </select>
                <br>
                <input id="enviar" type="submit" value="Enviar" >

                <div class="error">
                    <ul>
                        <?php foreach($errores as $error): ?>
                            <li>
                                <?= $error; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>


                <div class="">
                    <p>¿Ya eres usuario?</p>
                    <a href="">Click aqui</a>
                </div>
            </form>


        </div>


    </div>



    <?php include_once "components/footer.php"; ?>
    <?php include_once "components/scripts.php"; ?>
</body>
</html>

