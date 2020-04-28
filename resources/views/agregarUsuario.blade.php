<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
</head>
<body>

    <ul>
        @foreach( $errors->all() as $error )
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    <form method="POST" action="agregarUsuario">
        @csrf
        <!-- User -->
        <div class="">
            <label for="user" class="">Usuario</label>
            <br>
            <input id="user" type="text" class="" name="user" value=" {{ old('user') }}" >
        </div>

        <!-- <br> -->
        <!-- Name -->
        <!-- <div class="">
            <label for="name" class="">Nombre</label>
            <br>
            <input id="name" type="text" class="" name="name" value="{{ old('name') }}" >
        </div> -->

        <!-- <br> -->
        <!-- LastName -->
        <!-- <div class="">
            <label for="lastname" class="">Apellido</label>
            <br>
            <input id="lastname" type="text" class="" name="lastname" value="{{ old('lastname') }}" >
        </div> -->

        <!-- <br>     -->
        <!-- dni -->
        <!-- <div class="">
            <label for="dni" class="">Dni</label>
            <br>
            <input id="dni" type="text" class="" name="dni" value="{{ old('dni') }}" >
        </div> -->

        <br>
        <!-- Email -->
        <div class="">
            <label for="email" class="">Email</label>
            <br>
            <input id="email" type="text" class="" name="email" value="{{ old('email') }}" >
        </div>

        <br>
        <!-- Password -->
        <div class="">
            <label for="password" class="">Contraseña</label>
            <br>
            <input id="password" type="password" class="" name="password" value="" >
        </div>

        <br>
        <!-- Confirm password -->
        <div class="">
            <label for="password_confirmation" class="">Confirmar Contraseña</label>
            <br>
            <input id="" type="password" class="" name="password_confirmation" value="" >
        </div>

        <div class="">
            <input type="submit" value="Agregar Usuario">
        </div>

    </form>
</body>
</html>