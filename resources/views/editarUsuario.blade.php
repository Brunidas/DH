@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Editar Usuario</h3></div>
                    <div class="card-body">
                        


                        
                        @if( $errors->isEmpty() == FALSE )
                            
                            <div class="btn btn-outline-danger mb-2">
                                @foreach( $errors->all() as $error )
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif


                        <form method="POST" action="/editarUsuario">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">        
                                    <span class="input-group-text" id="basic-addon1">Nuevo Nombre De Usuario</span>
                                </div>
                                <input type="text" class="form-control" name="user" value="{{ $usuario['user'] }}">
                                <input type="hidden" name="id" id="" value="{{$usuario['id']}}">


                            <div class="">
                                <input class="btn btn-primary " type="submit" value="Guardar">
                            </div>


                        </form>





                    </div> 
                </div>    
            </div>
        </div>
    </div>
</div>   
@endsection

