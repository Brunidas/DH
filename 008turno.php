<!DOCTYPE html>
<html lang="es">



<?php include_once "components/head.php"; ?>

<body>

    <div class="container">

        <div class="row  d-flex justify-content-center">
            <form action="002home.php" method="post">
                <div class="col">
                    <a href="002home.php">
                        Cancelar Turno
                    </a>
                </div>

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
    
                <!-- elegir doctor -->
                <div class="col-6 d-flex justify-content-center">
                    <label for="elegirProfesional">Elegir Profesinal</label>
                    <select name="elegirProfesional" id="">
                        <option value="">Doctor alfa</option>
                        <option value="">Doctor beta</option>
                        <option value="">Doctor gama</option>
                    </select>
                </div>
                <!-- doctor seleccionado -->
                <div class="col-6 d-flex justify-content-center">
                    Doctor Seleccionado
                </div>
    
    
                <div class="col-12 ">
                    <p class="_bf_popUp-importante p-2">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi, odit.
                    </p>
                </div>
    
                <div class="col-12">
                    <p>Date: <input type="text" id="datepicker"></p>
                    <h3 class="h5">Turnos Disponibles</h3>
                </div>
    
                <!-- fecha -->
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center">
                            <a href="">fecha1</a>
                        </div>
    
                        <div class="col-3 d-flex justify-content-center">
                            <a href="">fecha2</a>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <a href="">fecha3</a>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <a href="">fecha4</a>
                        </div>
    
                        <div class="col-3 d-flex justify-content-center">
                            <a href="">fecha5 </a>
                        </div>
                    </div>
    
    
                </div>
    
                <!-- elegir paciente -->
                <div class="col-6 d-flex justify-content-center">
                    <label for="elegirProfesional">Elegir Paciente</label>
                    <select name="elegirProfesional" id="">
                        <option value="">Yo merito</option>
                        <option value="">Hermano con la pata chueca</option>
                        <option value="">Abuela trapera </option>
                    </select>
                </div>
    
                <!-- paciente seleccionado -->
                <div class="col-6 d-flex justify-content-center">
                    Doctor Seleccionado
                </div>
    
                <!-- visualizar datos ingresados -->
                <div class="col-12">
                    <ul>
                        <li>Profesinal: Dr. Profesor</li>
                        <li>Fecha: dd/mm/aaaa</li>
                        <li>Hora: hh:mm </li>
                        <li>Paciente: Apellido Nombre</li>
                    </ul>
    
                </div>
    
                <!-- comentarios -->
                <div class="col-12">
                    <label for="comenatrio">Cometarios</label>
                    <textarea name="comentario" id=""></textarea>
                </div>
            </form>





        
        </div>






    </div>




    <?php include_once "components/scripts.php"; ?>
</body>

</html>