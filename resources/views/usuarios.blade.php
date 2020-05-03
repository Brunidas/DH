@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Usuarios</h3></div>
                    <div class="card-body">
                        
                        
                        <form action="/agregarUsuario" method="get">
                            {{ csrf_field() }}
                            <input  class="btn btn-success mb-2" type="submit" value="Agregar Usuario">
                        </form>


                        <a class="btn btn-dark mb-2" href="/adminstradores">Administradores</a>
                        <a  class="btn btn-dark mb-2" href="/profesionales">Profesionales</a>




                        @foreach( $usuarios as $usuario)
                            <div class="card">
                                <div class="card-body">
                                
                                    <h5 class="card-title">{{ "# ".$usuario->id }}</h5>
                                    <p class="card-text">
                                        {{ "@".$usuario->user }} <br>
                                        {{ $usuario->email }}
                                    </p>

                                    <form class="d-inline" action="/borrarUsuario" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value= "{{ $usuario->id }}" >
                                        <input class="d-inline btn btn-danger"type="submit" value="Borrar">
                                    </form>

                                    <form class="d-inline" action="/editarUsuario/{{ $usuario->id }}" method="get">
                                        {{ csrf_field() }}
                                        <input class="d-inline btn btn-primary" type="submit" value="Editar">
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

