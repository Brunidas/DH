
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Profesionales</h3></div>
                    <div class="card-body">

                        <form action="/agregarProfesional" method="get">
                            {{ csrf_field() }}
                            <input  class="btn btn-success mb-2" type="submit" value="Agregar Profesional">
                        </form>


                        @foreach( $profesionales as $profesional)
                            <div class="card">
                                <div class="card-body">


                                    <h5 class="card-title">{{ "# ".$profesional->id }}</h5>
                                    <p class="card-text">
                                        {{ $profesional->name }} 
                                        {{ $profesional->lastname }} <br>
                                        Numuero de telefono: +54 9 {{ $profesional->phone_number }} <br>
                                        Usuario: {{ $profesional->user }} <br>
                                        Email: {{ $profesional->email }} <br>
                                        Matricula: {{ $profesional->enrollment }} <br>

                                        Especiliadad:

                                        @foreach ( $especialidades as $especialidad )
                                            @if ( $profesional->specialties_id == $especialidad->id )
                                                {{ $especialidad->name }}
                                            @endif
                                        @endforeach

                                    </p>

                                    <form action="/eliminarProfesional" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value= "{{ $profesional->id }}" >
                                        <input type="hidden" name="user_id" value= "{{ $profesional->user_id }}" >
                                        <input class="d-inline btn btn-danger" type="submit" value="Eliminar">
                                    </form>
                        
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

