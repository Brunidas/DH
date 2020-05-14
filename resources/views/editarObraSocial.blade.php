@extends("plantilla")

@section("titulo")
  Editar Obra Social
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white"><h3>{{ $obraSocial["name"] }}</h3></div>
                    <div class="card-body">



                        <form action="editarObraSocial" method="post" >
                            {{ csrf_field() }}

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">


                                    <span class="input-group-text" id="basic-addon1">Nuevo Nombre</span>


                                </div>

                                <input type="text" class="form-control" name="name">
                                <input type="hidden" name="id" id="" value="{{ $obraSocial['id'] }}">

                            </div>

                            <div class="">
                                <input class="btn btn-primary" type="submit" value="Guardar Cambios">
                            </div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
