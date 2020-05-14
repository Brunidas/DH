@extends("plantilla")

@section("titulo")
  Editar Paciente
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary text-white "><h3>Editar Paciente</h3></div>
                    <div class="card-body">


                        @if( $errors->isEmpty() == FALSE )

                            <div class="btn btn-outline-danger mb-2">
                                @foreach( $errors->all() as $error )
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif

                        <form action="editarPaciente" method="post" >
                            {{ csrf_field() }}
                            <input type="hidden" name="id" id="" value="{{ $paciente['id'] }}">
                            <input type="hidden" name="user_id" value="{{ $paciente['user_id'] }}">


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                                </div>
                                <input type="text" class="form-control"name="name" id="" value="{{ $paciente['name'] }}">

                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Apellido</span>
                                </div>
                                <input type="text" class="form-control"  name="lastname" id="" value="{{ $paciente['lastname'] }}">
                            </div>



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Dni</span>
                                </div>
                                <input type="text"  class="form-control" name="dni" id="" value="{{ $paciente['dni'] }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero De Socio</span>
                                </div>
                                <input type="text"  class="form-control" name="membership_number" id="" value="{{ $paciente['membership_number'] }}">
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion</span>
                                </div>

                                <input type="text"  class="form-control" name="adress" id="" value="{{ $paciente['adress'] }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Provincia</span>
                                </div>
                                <input type="text" class="form-control" name="province" id="" value="{{ $paciente['province'] }}">

                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero De Telefono</span>
                                </div>
                                <input type="text" class="form-control" name="phone_number" id="" value="{{ $paciente['phone_number'] }}">
                            </div>

                            @if( $paciente['account_holder'] == True )
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Obra Social</label>
                                    </div>
                                    <select name="medical_insurances_id" class="custom-select" id="inputGroupSelect01">
                                        @foreach ( $obrasSociales as $obrasSocial )
                                            <option name="medical_insurances_id" value="{{ $obrasSocial->id }}">{{ $obrasSocial->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            @endif

                            <div class="">
                                <input class="btn btn-primary" type="submit" value="Guardar">
                            </div>


                        </form>





                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
