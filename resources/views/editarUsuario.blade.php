<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar obra social</title>
</head>
<body>

    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
        
    <form action="/editarUsuario" method="post" >
        {{ csrf_field() }}
        <br>
        <div class="">
            <input type="hidden" name="id" id="" value="{{ $usuario['id'] }}">

            <label for="name">Nombre: </label>
            <input type="text" name="name" id="" value="{{ $usuario['name'] }}">
            <br>

            <label for="lastname">Apellido: </label>
            <input type="text" name="lastname" id="" value="{{ $usuario['lastname'] }}">
            <br>
            
            <label for="user">Usuario: </label>
            <input type="text" name="user" id="" value="{{ $usuario['user'] }}">
            <br>

            <label for="dni">Dni: </label>
            <input type="text" name="dni" id="" value="{{ $usuario['dni'] }}">
            <br>

        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
</body>
</html>