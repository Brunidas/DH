@extends("plantilla")

@section("titulo")
  Solicitar un Turno
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white"><h3>{{$especialidad->name}}</h3></div>
                    <div class="card-body">


                        <form action="pedirTurno" method="post">


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Paciente</label>
                                </div>
                                <select name="medical_insurances_id" class="custom-select" id="inputGroupSelect01">
                                    @foreach ( auth()->user()->patients as $paciente )
                                    <option name="patients_id" value="{{ $paciente->id }}">{{ $paciente->name." ".$paciente->lastname  }}</option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="card">
                                <div class="card-header">Elegir Turno</div>
                                <div class="card-body">
                                    <br>
                                    @foreach ( $turnos as $turno )
                                        <input type="radio" name="meeting_id" id="date" value="{{$turno->id}}">
                                        {{ $turno->date->weekday." ".$turno->date->date." ".$turno->hour->time }}
                                        {{ " | "}}
                                        {{ $turno->professional->name." ".$turno->professional->lastname }}
                                        <br>
                                    @endforeach
                                    {{ $turnos->links() }}
                                    <br>
                                </div>
                            </div>

                            <input type="hidden" name="id_user" id="id_user" value="{{auth()->user()->id}}">


                            <input class="btn btn-primary mt-2" type="submit" value="Pedir">


                        </form>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
