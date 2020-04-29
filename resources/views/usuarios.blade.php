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
        <form action="/agregarUsuario" method="get">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Usuario">
        </form>
        
        <a href="/adminstradores">Administradores</a>
        <a href="/profesionales">Profecionales</a>

        <ul>
            @foreach( $usuarios as $usuario)
            <li>
                <form action="/borrarUsuario" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value= "{{ $usuario->id }}" >
                    <input type="submit" value="Borrar Usuario">
                </form>

                <form action="/editarUsuario/{{ $usuario->id }}" method="get">
                    {{ csrf_field() }}
                    <input type="submit" value="Editar Usuario">
                </form>

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
                

                admi : {{ $usuario->admin }}
                <br>
                professional : {{ $usuario->professional }}
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