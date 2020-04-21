<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    
    <h1>Usuarios:</h1>
    <p>
        <a href="/adminstradores">Administradores</a>
        <a href="/profesionales">Profecionales</a>
        <ul>
            @foreach( $usuarios as $usuario)
            <li>
                id: {{ $usuario->id }}
                <br>
                user: {{ $usuario->user }}
                <br>
                password {{ $usuario->password }}
                <br>
                email: {{ $usuario->email }}
                <br>
                email_verified_at:{{ $usuario->email_verified_at }}
                <br>
                name: {{ $usuario->name }}
                <br>
                lastname: {{ $usuario->lastname }}
                <br>

                dni : {{ $usuario->dni }}
                <br>
                admi? : {{ $usuario->admin }}
                <br>
                remember_token : {{ $usuario->remember_token }}
                <br>
                created_at : {{ $usuario->created_at }}
                <br>
                updated_at : {{ $usuario->updated_at }}


            </li>
            <br>
            @endforeach
        </ul>

        

    </p>


</body>
</html>