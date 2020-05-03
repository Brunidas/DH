@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Obras Sociales</h3></div>
                    <div class="card-body">
                        
                        
                        <form action="/agregarObraSocial" method="get">
                            {{ csrf_field() }}
                            <input class="btn btn-success mb-2" type="submit" value="Agregar Obra Social">
                        </form>


                        <ul class="list-group">
                            @foreach( $obrasSociales as $obrasSocial )
                            <li class="list-group-item" >
                                <h5>
                                    {{ $obrasSocial->name }}
                                </h5>

                                <form class="d-inline" action="/borrarObraSocial" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value= "{{ $obrasSocial->id }}" >
                                    <input class="btn btn-danger"type="submit" value="Borrar">
                                </form>


                                <form  class="d-inline" action="/editarObraSocial/{{ $obrasSocial->id }}" method="get">
                                    {{ csrf_field() }}
                                    <input class="btn btn-primary" type="submit" value="Editar">
                                </form>

                            </li>
                            <br>
                            @endforeach
                        </ul>



                        
                    </div> 
                </div>    
            </div>
        </div>
    </div>
</div>   
@endsection


