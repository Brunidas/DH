
@extends("plantilla")

@section("titulo")
  Turnos Disponibles
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white"><h3>Fechas</h3></div>
                    <div class="card-body">


                        <form action="agregarDias" method="post">
                            {{ csrf_field() }}
                            <input  class="btn btn-success " type="submit" value="Agregar Dias">
                        </form>
                        <br>
                        <ul>
                            @foreach( $fechas as $fecha)
                            <li>
                                {{ 'fecha:' . $fecha->date . "dia de la semana: " . $fecha->weekday }}
                            </li>

                            @endforeach
                        </ul>








                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
