@extends("plantilla")

@section("titulo")
  Preguntas Frecuentes
@endsection

@section("principal")

    <div class="container p-4 p-md-5">
        <div class="_bf_titulos-mobile row mb-4 ">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="h1">FAQ</h2>
            </div>

        </div>


        <div class="_bf_titulos mt-5 mb-5">
            <h1 class="display-1 ">FAQ</h1>
        </div>

        <hr>



        <?php for($i=1;$i<=5;$i++){

              <button id="_bf_botonFaq-color=$i;" class="w-100 p-3 d-flex justify-content-center justify-content-md-between _bf_botonFaq-color mb-3">
                ¿Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut?
                <img class="_bf_botonFaq-flechaAbajo" id="_bf_botonFaq-flechaAbajo=$i;" src="img/icons/flechaAbajo.png" alt="">

                <img class="_bf_displayNone _bf_botonFaq-flechaArriba" id="_bf_botonFaq-flechaArriba=$i; " src="img/icons/flechaArriba.png" alt="">

              </button>
              <p id="_bf_botonFaq-texto=$i; " class="_bf_botonFaq-texto p-4 pt-5 mb-2">
                Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut, sagittis volutpat blandit ultricies quis montes feugiat proin posuere, torquent convallis natoque nunc dictumst litora conubia taciti. Inceptos dapibus ridiculus vehicula nam a eu nascetur vel netus, penatibus est rhoncus sociis posuere id euismod sapien, ut non varius lectus iaculis porta parturient cum. Ad facilisis feugiat vitae mauris lobortis gravida sed aliquet hendrerit, sodales nulla pretium habitant sociosqu class.
              </p>

        } ?>

        <!-- pregunta 1 -->
        <!-- <button id="_bf_botonFaq-color1" class="w-100 p-3 d-flex justify-content-center justify-content-md-between _bf_botonFaq-color mb-3">
            ¿Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut?
            <img class="_bf_botonFaq-flechaAbajo" id="_bf_botonFaq-flechaAbajo1" src="img/icons/flechaAbajo.png" alt="">

            <img class="_bf_displayNone _bf_botonFaq-flechaArriba" id="_bf_botonFaq-flechaArriba1" src="img/icons/flechaArriba.png" alt="">

        </button>
        <p id="_bf_botonFaq-texto1" class="_bf_botonFaq-texto p-2 pt-4 mb-2">
            Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut, sagittis volutpat blandit ultricies quis montes feugiat proin posuere, torquent convallis natoque nunc dictumst litora conubia taciti. Inceptos dapibus ridiculus vehicula nam a eu nascetur vel netus, penatibus est rhoncus sociis posuere id euismod sapien, ut non varius lectus iaculis porta parturient cum. Ad facilisis feugiat vitae mauris lobortis gravida sed aliquet hendrerit, sodales nulla pretium habitant sociosqu class.
        </p> -->


        <!-- pregunta 2 -->
        <!-- <button id="_bf_botonFaq-color2" class="w-100 p-3 d-flex justify-content-center justify-content-md-between _bf_botonFaq-color mb-3">
            ¿Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut?
            <img class="_bf_botonFaq-flechaAbajo" id="_bf_botonFaq-flechaAbajo2" src="img/icons/flechaAbajo.png" alt="">

            <img class="_bf_displayNone _bf_botonFaq-flechaArriba" id="_bf_botonFaq-flechaArriba2" src="img/icons/flechaArriba.png" alt="">

        </button>
        <p id="_bf_botonFaq-texto2" class="_bf_botonFaq-texto p-2 pt-4 mb-2">
            Lorem ipsum dolor sit amet consectetur adipiscing elit suscipit ut, sagittis volutpat blandit ultricies quis montes feugiat proin posuere, torquent convallis natoque nunc dictumst litora conubia taciti. Inceptos dapibus ridiculus vehicula nam a eu nascetur vel netus, penatibus est rhoncus sociis posuere id euismod sapien, ut non varius lectus iaculis porta parturient cum. Ad facilisis feugiat vitae mauris lobortis gravida sed aliquet hendrerit, sodales nulla pretium habitant sociosqu class.
        </p> -->


    </div>


@endsection