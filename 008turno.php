<?php
    if( isset($_COOKIE["usuarioCorreo"])==false && isset($_COOKIE["contrasenna"])==false){
        header("Location: 005login.php");
    };
?>

<!DOCTYPE html>
<html lang="es">



<?php include_once "components/head.php"; ?>

<body class="m-4">

    <div class="container">

        <div class="row d-flex justify-content-center ">
            <form action="002home.php" method="post" class="_bf_turnoForm">


                <!-- titulo -->
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="h2 _bf_turnoTitulo">Nuevo turno en:</h2>
                </div>
    
                <!-- especilidad -->
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="_bf_especialidad pt-3 pb-3"  id="especialidadSeleccionada">
                        Especialidad Seleccionada
                    </button>
                </div>
                <div class="_bf_turnoTextoDebajoBoton col-12 d-flex justify-content-center mb-4">
                    *Para cambiar de especilidad click en el boton 
                </div>

    
                <!-- elegir doctor -->
                <div class="col-12 d-flex justify-content-center mb-2">
                    <label class="mr-2" for="elegirProfesional">Elegir Profesinal:</label>
                    <select name="elegirProfesional" id="">
                        <option value="">Doctor alfa</option>
                        <option value="">Doctor beta</option>
                        <option value="">Doctor gama</option>
                    </select>
                </div>
                <!-- doctor seleccionado -->
                <div class="col-12 mb-4">
                    <p class="text-center">
                        Doctor Seleccionado 
                    </p>    
                </div>



                <!-- Mensaje Importante -->
                <div class="col-12 ">
                    <p class="_bf_turnoImportante p-2">
                        <b>*Importante: </b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, odit.
                    </p>
                </div>


                <!-- Seleccionar dia -->
                <div class="col-12 d-flex justify-content-center">
                    <p>Fecha: <input type="text" id="datepicker"></p>
                </div>
                
                <div class="col-12 d-flex justify-content-center">
                    <h3 class="h5">Horarios Disponibles:</h3>
                </div>
 


                <!-- fecha -->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center">
                            <a class="_bf_turnoLinks" href="">fecha1</a>
                        </div>
    
                        <div class="col-3 d-flex justify-content-center">
                            <a class="_bf_turnoLinks" href="">fecha2</a>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <a class="_bf_turnoLinks" href="">fecha3</a>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <a class="_bf_turnoLinks" href="">fecha4</a>
                        </div>
    
                        <div class="col-3 d-flex justify-content-center">
                            <a class="_bf_turnoLinks" href="">fecha5 </a>
                        </div>
                    </div>
    
    
                </div>
    





                <!-- elegir paciente -->
                <div class="col-12 d-flex justify-content-center mb-2">
                    <label class="mr-2" for="elegirProfesional">Elegir Paciente:</label>
                    <select name="elegirProfesional" id="">
                        <option value="">Yo</option>
                        <option value="">Tu</option>
                        <option value="">El/Ella</option>
                        <option value="">Nosotros</option>
                        <option value="">Ustedes</option>
                        <option value="">Ellos</option>
                    </select>
                </div>
                <!-- paciente seleccionado -->
                <div class="col-12 mb-4">
                    <p class="text-center">
                        Paciente Seleccionado 
                    </p>    
                </div>



    
                <!-- visualizar datos ingresados -->
                <div class="col-12 d-flex justify-content-center">
                    <b>Datos:</b>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ul>
                        <li>Profesinal: Dr. Profesor</li>
                        <li>Fecha: dd/mm/aaaa</li>
                        <li>Hora: hh:mm </li>
                        <li>Paciente: Apellido Nombre</li>
                    </ul>
    
                </div>
    
                <!-- comentarios -->
                <div class="col-12 d-flex justify-content-center">
                    <b>Comentarios:</b>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <textarea class="w-100 _bf_turnoTextArea mb-5" name="comentario"></textarea>
                </div>

                <!-- enviar -->
                <div class="col-12 d-flex justify-content-center">
                    <button class="m-5 _bf_turnoBoton pt-3 pb-3" type="submit">
                        Pedir Turno :D
                    </button>

                </div>    
                

            </form>





        
        </div>






    </div>




    <?php include_once "components/scripts.php"; ?>
</body>

</html>