@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Administradores</h3></div>
                    <div class="card-body">




                        <form action="/agregarAdministrador" method="get">
                            {{ csrf_field() }}
                            <input  class="btn btn-success mb-2" type="submit" value="Agregar Admin">
                        </form>


                        @foreach( $adminstradores as $admin )
                            <div class="card">
                                <div class="card-body">
                                
                                    <h5 class="card-title">{{ "# ".$admin->id }}</h5>
                                    <p class="card-text">
                                        {{ "@".$admin->user }} <br>
                                        {{ $admin->email }}
                                    </p>

                                    <form class="d-inline" action="/eliminarAdmin" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value= "{{ $admin->id }}" >
                                        <input class="d-inline btn btn-danger"type="submit" value="Borrar">
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