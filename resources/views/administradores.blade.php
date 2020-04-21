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
        <ul>
            @foreach( $adminstradores as $admin)
            <li>
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
                name: {{ $admin->name }}
                <br>
                lastname: {{ $admin->lastname }}
                <br>

                dni : {{ $admin->dni }}
                <br>
                admi? : {{ $admin->admin }}
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