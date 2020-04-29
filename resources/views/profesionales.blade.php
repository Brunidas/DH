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

        <form action="/agregarProfesional" method="get">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Profesional">
        </form>
        
        <ul>
        @foreach( $profesionales as $profesional)
            <form action="/eliminarProfesional" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value= "{{ $profesional->id }}" >
                <input type="hidden" name="user_id" value= "{{ $profesional->user_id }}" >
                <input type="submit" value="Eliminar Profesional">
            </form>
            
            <li>
                
                id-professional: {{ $profesional->id }}
                <br>
                id-user: {{ $profesional->user_id }}
                <br>

                name: {{ $profesional->name }}
                <br>
                lastname {{ $profesional->lastname }}
                <br>
                phone_number: {{ $profesional->phone_number }}
                <br>

                user: {{ $profesional->user }}
                <br>
                password {{ $profesional->password }}
                <br>
                email: {{ $profesional->email }}
                <br>
                email_verified_at:{{ $profesional->email_verified_at }}
                <br>



                admi : {{ $profesional->admin }}
                <br>
                professional : {{ $profesional->professional }}
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