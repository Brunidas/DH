@extends("plantilla")

@section("titulo")
  Cuenta de usuario
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary text-white"><h3>{{ "@" }}{{ auth()->user()->user }}</h3></div>
                    <div class="card-body">


                        <form action="agregarPaciente/{{ auth()->user()->id }}" method="get">
                            {{ csrf_field() }}
                            <input  class="btn btn-success mb-2" type="submit" value="Crear Paciente">
                        </form>

                        @foreach( $pacientes as $paciente )
                            @if( $paciente->user_id == auth()->user()->id )


                                <div class="card">
                                    <div class="card-body">



                                        <h5 class="card-title">{{ "# ".$paciente->id }}</h5>

                                        <form  class="d-inline" action="editarPaciente/{{ $paciente->id }}" method="get">
                                            {{ csrf_field() }}
                                            <input class="d-inline btn btn-primary" type="submit" value="Editar">
                                        </form>

                                        @if ( $paciente->account_holder == false )
                                            <form class="d-inline" action="borrarPaciente" method="post">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value= "{{$paciente->id}}" >
                                                <input class="d-inline btn btn-danger" type="submit" value="Borrar">
                                            </form>
                                        @endif

                                        <p class="card-text">
                                            Nombre: {{ $paciente->name}}
                                            <br>
                                            Apellido: {{ $paciente->lastname}}
                                            <br>
                                            Dni: {{ $paciente->dni }}
                                            <br>
                                            Numero de Socio: {{ $paciente->membership_number }}
                                            <br>
                                            Direccion: {{ $paciente->adress }}
                                            <br>
                                            Provincia: {{ $paciente->province }}
                                            <br>
                                            Telefono: {{ $paciente->phone_number }}
                                            <br>
                                            Titular de la cuenta: {{ $paciente->account_holder }}
                                            <br>
                                            Obra Social : {{ $paciente->medicalInsurance->name }}
                                        </p>
                                    </div>
                                </div>












                                <br>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
