@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Usuarios Para Hacer Profesional</h3></div>
                    <div class="card-body">

                        @foreach( $usuarios as $usuario)
                            
                            @if( $usuario->admin == 0 and $usuario->professional == 0 )
                                <div class="card">
                                    <div class="card-body">
                                    
                                        <h5 class="card-title">{{ "# ".$usuario->id }}</h5>
                                        <p class="card-text">
                                            {{ "@".$usuario->user }} <br>
                                            {{ $usuario->email }}
                                        </p>

                
                                    
                                        <form action="/hacerProfesional/{{ $usuario->id }}" method="get">
                                            {{ csrf_field() }}
                                            <input class="d-inline btn btn-primary" type="submit" value="Hacer Profesional">
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