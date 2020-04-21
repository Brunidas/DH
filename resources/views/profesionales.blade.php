<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesionales</title>
</head>
<body>
    
    <h1>Profesionales:</h1>
    
    <p> 
        <ul>
        @foreach( $profesionales as $profesional)
            <li>
                id: {{ $profesional->id }}
                <br>
                user: {{ $profesional->user }}
                <br>
                password {{ $profesional->password }}
                <br>
                email: {{ $profesional->email }}
                <br>
                email_verified_at:{{ $profesional->email_verified_at }}
                <br>
                name: {{ $profesional->name }}
                <br>
                lastname: {{ $profesional->lastname }}
                <br>

                dni : {{ $profesional->dni }}
                <br>
                admi? : {{ $profesional->admin }}
                <br>
                remember_token : {{ $profesional->remember_token }}
                <br>
                created_at : {{ $profesional->created_at }}
                <br>
                updated_at : {{ $profesional->updated_at }}
                <br>
                enrollment: {{ $profesional->enrollment }}
                <br>
                specialty: 
                @foreach ( $especialidades as $especialidad )
                    @if ( $profesional->specialties_id == $especialidad->id )
                        {{ $especialidad->name }}
                    @endif
                @endforeach

            </li>
            <br>
            @endforeach
        </ul>

        

    </p>


</body>
</html>