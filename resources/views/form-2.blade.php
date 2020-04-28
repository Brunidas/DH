
@extends("plantilla")

@section("titulo")
  DH-Salud
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
                <h2 class="_bf_titulo h1 d-sm-none">Último paso</h2>
                <h2 class="_bf_titulo display-4 d-none d-sm-block">Último paso</h2>

            </div>

        </div>



        <div class="row d-flex justify-content-center mb-5">
            <form class="_bf_form col-12 m-3 " action="005login.php" method="POST" enctype="multipart/form-data">

                <!-- telefono -->
                <div class="col-12 d-flex justify-content-center mt-5  mb-2">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 "  id="telefono" type="text" name="telefono" placeholder="Telefono" value="">
                </div>
                <p></p>

                <!-- direccion -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100 "  id="direccion" type="text" name="direccion" placeholder="Direccion" value="">
                </div>
                <p></p>

                <!-- provincia -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="provincia" type="text" name="provincia" placeholder="Provincia" value="">
                </div>
                <p></p>


                <!-- titular de la obra social -->
                <label for="">Eres el titular de la obra social?</label>
                <input type="radio" name="titular" id="titularSi">Si
                <input type="radio" name="titular" id="titularNo">No

                <!-- Obras Sociales -->
                <label for="">Selecciona tu obra social/prepaga</label>
                <Select>
                    <option value="osde">OSDE</option>
                    <option value="noOsde">No es OSDE</option>

                </Select>

                <!-- numero de socio -->
                <div class="col-12 d-flex justify-content-center">
                    <input class="_bf_input pt-1 pb-1 pl-3 pr-3 w-100" id="numeroDeSocio" type="text" name="numeroDeSocio" placeholder="Numero De Socio" value="">
                </div>
                <p></p>


                <!-- Boton Enviar -->
                <div class="col-12 d-flex justify-content-center mt-4 mb-5">
                    <button type="submit" name="" value="" class="_bf_enviarFomulario pt-1 pb-1 pl-3 pr-3 w-100">
                        Finalizar
                    </button>
                </div>



            </form>


        </div>


    </div>

@endsection
