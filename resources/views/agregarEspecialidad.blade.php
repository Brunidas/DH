<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar pelicula</title>
</head>
<body>
    <form action="/agregarPelicula" method="post" >
        {{ csrf_field() }}
        <div class="">
            <label for="name">Nombre Especialidad</label>
            <input type="text" name="name" id="" value="">
        </div>

        <div class="">
            <input type="submit" value="Agregar Especialidad">
        </div>
    </form>
</body>
</html>