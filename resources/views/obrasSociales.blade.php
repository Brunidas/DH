<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras Sociales</title>
</head>
<body>
    
    <h1>Obras Sociales:</h1>
    <p>
        <form action="/agregarObraSocial" method="get">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Obra Social">
        </form>

        <ul>
            @foreach( $obrasSociales as $obrasSocial)
            <li>
                {{ $obrasSocial->name }}
                <form action="/borrarObraSocial" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value= "{{ $obrasSocial->id }}" >
                    <input type="submit" value="Borrar Obra Social">
                </form>

                <form action="/editarObraSocial/{{ $obrasSocial->id }}" method="get">
                    {{ csrf_field() }}
                    <input type="submit" value="Editar Obra Social">
                </form>
            </li>
            <br>
            @endforeach
        </ul>

        

    </p>


</body>
</html>