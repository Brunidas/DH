@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Agregar Especilidad:</h3></div>
                    <div class="card-body">
                    

                        <form action="/agregarEspecialidad" method="post" >
                            {{ csrf_field() }}  



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    
                                    <span class="input-group-text" id="basic-addon1">Nombre Especialidad</span>
                                
                                
                                </div>
                                <input type="text" class="form-control" name="name">
                            </div>
                            


                            <div class="">
                                <input class="btn btn-success " type="submit" value="Agregar Especialidad">
                            </div>
                        </form>



                    </div>    
            </div>
        </div>
    </div>
</div>   
@endsection

