@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                @if( auth()->user()->admin )

                    <div class="card-header bg-info text-white">Acciones de admin:</div>
                    <div class="card-body">
  

                        
                        <a class="btn btn-info mb-1" href="/especialidades">Listado Especialidades</a>

                        <a class="btn btn-info mb-1" href="/obrasSociales">Listado Obras Sociales</a>

                        <a class="btn btn-info mb-1" href="/usuarios">Administrar Usuarios</a>
                        
                        <a class="btn btn-info mb-1" href="/fechas">Administrar Fechas</a>
                        

                        <div class="">
                        </div>
                    </div>

                @endif
                

                @if( auth()->user()->admin or auth()->user()->professional )

                    <div class="card-header bg-success text-white">Acciones de profesional:</div>
        
                    <div class="card-body">
                        <div class="">
                            <a class="btn btn-success  mb-1" href="/turnosProfesional/{{auth()->user()->id}}">Mis turnos</a>
                        </div>
                    </div>
                @endif





                <div class="card-header">Home</div>
                <div class="card-body">
                
                    <div class="mb-1">
                        <a class="btn btn-secondary  mb-1" href="/cuenta">Cuenta de Usuario</a>
                        <a class="btn btn-secondary  mb-1" href="/turnosUsuario/{{auth()->user()->id}}">Ver turnos</a>
                    </div>



                    @foreach( $especialidades as $especialidad)
                    
                        <a class="btn btn-primary mb-1" href="pedirTurno/{{$especialidad->id}}">
                            {{ $especialidad->name }}
                        </a>

                    @endforeach
                
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
