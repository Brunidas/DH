<?php
    session_start();

    $cantidadEspecialidades = 10;

?>

@extends("plantilla")

@section("titulo")
  Bienvenido!
@endsection

@section("principal")

    <div class="container p-4 p-md-5">
        <div class="_bf_titulos-mobile row mb-4 ">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="h1">Cartilla De</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <h2 class="h1">Especialidades</h2>
            </div>

        </div>


        <div class="_bf_titulos mt-5 mb-5">
            <h2>Cartilla De</h2>
            <h1 class="display-1 ">Especialidades</h1>
        </div>

        <hr>





        <div class="row">

            <?php for($i=1;$i<=$cantidadEspecialidades;$i++): ?>

                <div class="col-12 d-flex justify-content-center col-sm-6 col-md-4 mb-3">
                    <button class="_bf_especialidad pt-3 pb-3 " type="submit" id="especialidad<?=$i?>">
                        Especialidad <?=$i;?>
                    </button>
                </div>



            <?php endfor; ?>


        </div>




    </div>

@endsection
