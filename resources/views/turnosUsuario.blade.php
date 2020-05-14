@extends("plantilla")

@section("titulo")
  Turnos del Usuario
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white "><h3>Turnos De Cuenta</h3></div>
                    <div class="card-body">

                        @foreach( $pacientes as $paciente )
                            <div class="card">
                                <div class="card-header bg-secondary text-white">
                                    <h4>{{"Turnos de: ". $paciente->name . " ". $paciente->lastname }}</h4>
                                </div>

                                <div class="card-body">
                                    @foreach( $paciente->meetings as $turno )
                                        <ul class="list-group">
                                            <li class="list-group-item" >
                                                {{ "Fecha y hora: ".$turno->date->weekday . " ". $turno->date->date." ".$turno->hour->time  }}
                                                <br>
                                                {{"Profesional: ". $turno->professional->name." ".$turno->professional->lastname }}
                                                <br>
                                                {{"Espacialidad: ". $turno->professional->specialty->name }}
                                                <br>
                                            </li>
                                        </ul>
                                        <br>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
