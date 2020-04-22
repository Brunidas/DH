@extends("plantilla")

@section("titulo")
  Obras Sociales
@endsection

@section("principal")

    <h1>Obras Sociales:</h1>
    <p>

        <ul>
            @foreach( $obrasSociales as $obrasSocial)
            <li>
                {{ $obrasSocial->name }}

            </li>
            <br>
            @endforeach
        </ul>

    </p>

@endsection
