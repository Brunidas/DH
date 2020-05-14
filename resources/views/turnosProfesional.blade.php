@extends("plantilla")

@section("titulo")
  Turnos del Profesional
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white"><h3>Mis Turnos</h3></div>
                    <div class="card-body">

                        <form action="crearTurno/{{ $profesionalActual->user_id }}/{{ $profesionalActual->id }}" method="get">
                            {{ csrf_field() }}
                            <input class="btn btn-success mb-2" type="submit" value="Agregar Turno Nuevo">
                        </form>


                        <div class="card-header bg-dark text-white"><h4>Turnos Pendientes:</h4></div>
                        @foreach( $profesionalActual->meetings as $turno )
                            @if ( $turno->patient != null )
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="card-title">{{"# ".$turno->id}}</h5>
                                        <p class="card-text">
                                            {{ $turno->date->weekday ." ". $turno->date->date }} <br>
                                            {{ $turno->hour->time }}<br>
                                            {{ "Paciente : " . $turno->patient->name. " ". $turno->patient->lastname}}<br>
                                            {{ "Obra Social : " . $turno->patient->medicalInsurance->name  }}<br>
                                            {{ "Dni: " . $turno->patient->dni  }}<br>
                                            {{ "Numero de Telefono: " . $turno->patient->phone_number}}<br>

                                        </p>


                                        <form action="eliminarTurno/" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id_turno" value="{{ $turno->id }}">
                                            <input type="hidden" name="id_user" value="{{ $profesionalActual->user_id }}">
                                            <input class="d-inline btn btn-danger" type="submit" value="Eliminar">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach




                        <div class="card-header bg-secondary text-white "><h4>Turnos Sin Paciente:</h4></div>
                        @foreach( $profesionalActual->meetings as $turno )
                            @if ( $turno->patient == null )
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="card-title">{{"# ".$turno->id}}</h5>
                                        <p class="card-text">
                                            {{ $turno->date->weekday ." ". $turno->date->date }} <br>
                                            {{ $turno->hour->time }}<br>

                                        </p>


                                        <form action="eliminarTurno/" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id_turno" value="{{ $turno->id }}">
                                            <input type="hidden" name="id_user" value="{{ $profesionalActual->user_id }}">
                                            <input class="d-inline btn btn-danger" type="submit" value="Eliminar">
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endforeach









                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
