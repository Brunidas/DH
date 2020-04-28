<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Admin</title>
</head>
<body>
    
    <h1>Usuarios para hacer profesionales:</h1>
    <p>
        <ul>
            @foreach( $usuarios as $usuario)
                @if( $usuario->admin == 0 and $usuario->professional == 0 )
                    <li>
                        <form action="/hacerProfesional/{{ $usuario->id }}" method="get">
                            {{ csrf_field() }}
                            <input type="submit" value="Hacer Profesional">
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
                        
                        <!-- name: {{ $usuario->name }}
                        <br>
                        lastname: {{ $usuario->lastname }}
                        <br>
                        dni : {{ $usuario->dni }}
                        <br> -->

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
                @endif
            @endforeach
        </ul>

        

    </p>


</body>
</html>