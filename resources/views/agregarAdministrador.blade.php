@extends("plantilla")

@section("titulo")
  Agregar Administrador
@endsection

@section("principal")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white"><h3>Usuarios Para Hacer Admin</h3></div>
                    <div class="card-body">



                        @foreach( $usuarios as $usuario)
                            @if( $usuario->admin == 0 )
                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="card-title">{{ "# ".$usuario->id }}</h5>
                                        <p class="card-text">
                                            {{ "@".$usuario->user }} <br>
                                            {{ $usuario->email }}
                                        </p>

                                        <form class="d-inline" action="hacerAdmin" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value= "{{ $usuario->id }}" >
                                            <input class="d-inline btn btn-primary"type="submit" value="Hacer Admin">
                                        </form>

                                    </div>


                                </div>
                            @endif
                            @endforeach



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
