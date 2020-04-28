<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
</head>
<body>
    
    <h1>Administradores:</h1>
    <p> 


        <form action="/agregarAdministrador" method="get">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Admin">
        </form>


        <ul>
            @foreach( $adminstradores as $admin)
            <li>
                <form action="/eliminarAdmin" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value= "{{ $admin->id }}" >
                    <input type="submit" value="Borrar Admin">
                </form>

                id: {{ $admin->id }}
                <br>
                user: {{ $admin->user }}
                <br>
                password {{ $admin->password }}
                <br>
                email: {{ $admin->email }}
                <br>
                email_verified_at:{{ $admin->email_verified_at }}
                <br>
            

            

                professional : {{ $admin->professional }}
                <br>
                admi : {{ $admin->admin }}
                <br>
                remember_token : {{ $admin->remember_token }}
                <br>
                created_at : {{ $admin->created_at }}
                <br>
                updated_at : {{ $admin->updated_at }}


            </li>
            <br>
            @endforeach
        </ul>

        

    </p>


</body>
</html>