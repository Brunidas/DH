<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar especialidad</title>
</head>
<body>
    <form action="/editarEspecialidad" method="post" >
        {{ csrf_field() }}
        {{ $especialidad["name"] }}
        <br>
        {{ $especialidad["id"] }}
        <div class="">
            <label for="name">Nuevo Nombre De Especialidad</label>
            <input type="text" name="name" id="" value="">
            <input type="hidden" name="id" id="" value="{{ $especialidad['id'] }}">
        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
</body>
</html>