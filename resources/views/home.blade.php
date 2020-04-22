@extends("plantilla")


@section("titulo")
  Bienvenido
@endsection

@section("principal")

  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    <@endif></@endif>

                    You are logged in!
                </div>

                <div class="">
                    <a href="/especialidades"> Especialidades</a>
                </div>

                <div class="">
                    <a href="/obrasSociales"> Obras Sociales</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
