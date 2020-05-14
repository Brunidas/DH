@extends("plantilla")

@section("titulo")
  Agregar Paciente
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-secondary text-white "><h3>Agregar Paciente</h3></div>
                    <div class="card-body">


                        @if( $errors->isEmpty() == FALSE )

                            <div class="btn btn-outline-danger mb-2">
                                @foreach( $errors->all() as $error )
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif


                        <form action="agregarPaciente" method="post" >
                            {{ csrf_field() }}


                            <input type="hidden" name="user_id" id="" value="{{ auth()->user()->id }}">


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
                                    <span class="input-group-text" id="basic-addon1">Dni</span>
                                </div>
                                <input type="text" class="form-control" name="dni" value=" {{ old('dni') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero De Socio</span>
                                </div>
                                <input type="text" class="form-control" name="membership_number" value=" {{ old('membership_number') }}">
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion</span>
                                </div>
                                <input type="text" class="form-control" name="adress" value=" {{ old('adress') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Provincia</span>
                                </div>
                                <input type="text" class="form-control" name="province" value=" {{ old('province') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Numero De Telefono</span>
                                </div>
                                <input type="text" class="form-control" name="phone_number" value=" {{ old('phone_number') }}">
                            </div>





                            @php
                                $collection = collect([]);
                            @endphp

                            @foreach ( $pacientes as $paciente)
                                @if( $paciente->user_id == $id )
                                    @php
                                        $collection->push( $paciente->user_id );
                                    @endphp
                                @endif
                            @endforeach
                            @php
                                if ( $collection->isEmpty() ){

                                    @endphp


                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Elegir una obra social</label>
                                            </div>

                                            <select name="specialty_id" class="custom-select" id="inputGroupSelect01">
                                                @foreach ($obrasSociales as $obrasSocial )
                                                    <option name="specialty_id" value="{{ $obrasSocial->id }}">{{$obrasSocial->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    @php

                                } else{

                                }

                            @endphp


                            <div class="">
                                <input class="btn btn-success" type="submit" value="Agregar">
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
