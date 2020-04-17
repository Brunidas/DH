<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialidades Medicas</title>
</head>
<body>
    
    <h1>Especialidades:</h1>
    <p>
        <form action="/agregarEspecialidad" method="get">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Especialidad">
        </form>

        <ul>
            @foreach( $especialidades as $especiliadad)
            <li>
                {{ $especiliadad->name }}
                <form action="/borrarEspecialidad" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value= "{{ $especiliadad->id }}" >
                    <input type="submit" value="Borrar Especialidad">
                </form>



                <form action="/editarEspecialidad/{{ $especiliadad->id }}" method="get">
                    {{ csrf_field() }}
                    <input type="submit" value="Editar Especialidad">
                </form>

            </li>
            <br>
            @endforeach
        </ul>

        

    </p>


</body>
</html>