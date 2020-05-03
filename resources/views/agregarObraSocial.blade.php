@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card"> 
                <div class="card-header bg-info text-white"><h3>Agregar Obra Social:</h3></div>
                    <div class="card-body">
                    

                        <form action="/agregarObraSocial" method="post" >
                            {{ csrf_field() }}  



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    
                                    <span class="input-group-text" id="basic-addon1">Nombre Obra Social</span>
                                
                                
                                </div>
                                <input type="text" class="form-control" name="name">
                            </div>
                            


                            <div class="">
                                <input class="btn btn-success " type="submit" value="Agregar Obra Social">
                            </div>
                        </form>



                    </div>    
            </div>
        </div>
    </div>
</div>   
@endsection

