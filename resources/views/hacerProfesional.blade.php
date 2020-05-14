@extends("plantilla")

@section("titulo")
  Crear Profesional
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white"><h3>Nuevo Profesional</h3></div>
                    <div class="card-body">

                        @if( $errors->isEmpty() == FALSE )

                            <div class="btn btn-outline-danger mb-2">
                                @foreach( $errors->all() as $error )
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="agregarProfesional">
                            @csrf
                            <input type="hidden" name="id" id="" value="{{ $id }}">


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Matricula</span>
                                </div>
                                <input type="text" class="form-control" name="enrollment" value=" {{ old('enrollment') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                                </div>
                                <input type="text" class="form-control" name="name" value=" {{ old('name') }}">
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                                </div>
                                <input type="text" class="form-control" name="lastname" value=" {{ old('lastname') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Telefono</span>
                                </div>
                                <input type="text" class="form-control" name="phone_number" value=" {{ old('phone_number') }}">
                            </div>



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Especilidad</label>
                                </div>
                                <select name="specialty_id" class="custom-select" id="inputGroupSelect01">
                                    @foreach ( $especialidades as $especialidad)
                                        <option name="specialty_id" value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                                    @endforeach

                                </select>
                            </div>





                        <div class="">
                            <input class="btn btn-success " type="submit" value="Agregar">
                        </div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
