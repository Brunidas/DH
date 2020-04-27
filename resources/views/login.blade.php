@extends("plantilla")

@section("titulo")
  Ingrese a su cuenta
@endsection

@section("principal")

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
                <!-- <div class="col-12 d-flex justify-content-center mt-5  mb-2 ">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" type="text" name="usuarioCorreo" placeholder="Ingresa Usuario o Correo" value="<? // echo $usuarioCorreo ?>"   >
                </div> -->
                <?php // if ($erroresYDatosCorrectos[1]["usuarioCorreo"] != "") : ?>
                    <!-- <div class="error">
                        <ul>
                            <li> -->
                                <?// echo $erroresYDatosCorrectos[1]["usuarioCorreo"] ?>
                            <!-- </li>
                        </ul>
                    </div> -->
                <?php // endif; ?>
                <p></p>



                <!-- Contraseña  -->
                <!-- <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 " type="password" name="contrasenna" placeholder="Contraseña">
                </div> -->
                <?php // if ($erroresYDatosCorrectos[1]["contrasenna"] != "") : ?>
                    <!-- <div class="error">
                        <ul>
                            <li> -->
                                <? // echo $erroresYDatosCorrectos[1]["contrasenna"] ?>
                            <!-- </li>
                        </ul>
                    </div> -->
                <?php // endif; ?>
                <p></p>





                <div class="_bf_textoDebajoBoton col-12 d-flex justify-content-center mb-4">
                    ¿Contraseña olivada?
                    <a class="ml-1" href="#"> Click aquí</a>
                </div>


                <!-- mt-4 mb-5 -->
                <div class="col-12 d-flex justify-content-center mt-4">
                    <button type="submit" name="" value="" class="_bf_iniciarSesion pt-1 pb-1 pl-3 pr-3 w-100">
                        Iniciar sesión
                    </button>
                </div>

                <a href="002home.php">Iniciar sesion </a>



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
                    ¿Nuevo en DH Salud? <a class="ml-1" href="003form-1.php">Crear cuenta</a>
                </div>
            </form>

        </div>




    </div>



@endsection
