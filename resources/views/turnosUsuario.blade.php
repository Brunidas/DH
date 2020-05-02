<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cuenta Usuario </title>
</head>
<body>
    
    <h1> {{ "@" }}{{ auth()->user()->user }} </h1>
    <h1> Turnos De La Cuenta Usuario</h1>

    @foreach( $pacientes as $paciente )
        <h3>
            {{"Paciente: ". $paciente->name . " ". $paciente->lastname }}
        </h3>

        {{" Turnos: "}}
        <ul>
            @foreach( $paciente->meetings as $turno )
                <li>
                    {{ "Fecha y hora: ".$turno->date->weekday . " ". $turno->date->date." ".$turno->hour->time  }}
                    <br>
                    {{"Profesional: ". $turno->professional->name." ".$turno->professional->lastname }}
                    <br>
                    {{"Espacialidad: ". $turno->professional->specialty->name }}
                    <br>
                </li>
                <br>
            @endforeach
        </ul>


    @endforeach




</body>
</html>