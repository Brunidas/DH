@extends("plantilla")

@section("titulo")
  Crear Turno
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white"><h3>Crear Turno Nuevo</h3></div>
                    <div class="card-body">


                        <div class="card mb-2">
                            <div class="card-header bg-secondary text-white">Turnos Ya Creados</div>
                            <div class="card-body">
                                @foreach ( $profesional->meetings as $turno )
                                    {{ $turno->date->weekday ." ". $turno->date->date ." ".$turno->hour->time  }} <br>
                                @endforeach
                            </div>
                        </div>




                        <form action="crearTurno" method="post">
                            {{ csrf_field() }}



                            <div class="card">
                                <div class="card-header">Elegir Fecha</div>
                                <div class="card-body">
                                    <br>
                                    @foreach ( $fechas as $fecha )
                                        <input type="radio" name="dates_id" value="{{ $fecha->id }}">
                                        {{ $fecha->weekday. " ". $fecha->date }}
                                        <br>
                                    @endforeach
                                    {{ $fechas->links() }}
                                    <br>
                                </div>
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Elegir horario</label>
                                </div>
                                <select name="hours_id" class="custom-select" id="inputGroupSelect01">
                                    @foreach ( $horas as $hora )
                                        <option name="hours_id" value="{{ $hora->id }} ">{{ $hora->time }}</option>
                                    @endforeach

                                </select>
                            </div>




                            <input type="hidden" name="id" value="{{ $profesional->id }}">

                            <input class="btn btn-primary mt-2 " type="submit" value="Crear Turno">
                        </form>








                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
