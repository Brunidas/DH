@extends("plantilla")
<?php
    session_start();

    $cantidadObrasSociales = 10;

?>
@section("titulo")
  Obras Sociales
@endsection

@section("principal")

  <div class="container p-4 p-md-5">
      <div class="_bf_titulos-mobile row mb-4 ">
          <div class="col-12 d-flex justify-content-center">
              <h2 class="h1">Obras</h2>
          </div>

          <div class="col-12 d-flex justify-content-center">
              <h2 class="h1">Sociales</h2>
          </div>

      </div>


      <div class="_bf_titulos mt-5 mb-5">
          <h2>Obras</h2>
          <h1 class="display-1 ">Sociales</h1>
      </div>

      <hr>





      <div class="row">

          <?php for($i=1;$i<=$cantidadObrasSociales;$i++): ?>

              <div class="col-12 d-flex justify-content-center col-sm-6 col-md-4 mb-3">
                  <button class="_bf_especialidad pt-3 pb-3 " type="submit" id="obraSocial<?=$i?>">
                      Obra Social <?=$i;?>
                  </button>
              </div>





          <?php endfor; ?>


      </div>




  </div>




@endsection
