@extends("plantilla")

@section("titulo")
  Agregar usuario
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white"><h3>Nuevo Usuario</h3></div>
                    <div class="card-body">

                        @if( $errors->isEmpty() == FALSE )

                            <div class="btn btn-outline-danger mb-2">
                                @foreach( $errors->all() as $error )
                                    {{ $error }}
                                    <br>
                                @endforeach
                            </div>
                        @endif




                        <form method="POST" action="agregarUsuario">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Usuario</span>
                                </div>
                                <input type="text" class="form-control" name="user" value=" {{ old('user') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" class="form-control" name="email" value=" {{ old('email') }}">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation" value="">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Confimar Contraseña</span>
                                </div>
                                <input type="password" class="form-control" name="password" value="">
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
