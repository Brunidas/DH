<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cuenta Usuario </title>
</head>
<body>
    
    <h1> {{ "@" }}{{ auth()->user()->user }} </h1>
    <h2>{{$especialidad->name}}</h2>

    <form action="pedirTurno" method="post">
        {{ csrf_field() }}

        <label for="patients">Elegir Pacinete</label>
        <select id="patients" name="patients_id">
            @foreach(auth()->user()->patients as $paciente )
                <option name="patients_id" value="{{ $paciente->id }}">{{ $paciente->name." ".$paciente->lastname  }}</option>
            @endforeach
        </select>

        <br>

        <label for="date">Elegir Turno:</label>
        <br>
        @foreach ( $turnos as $turno )
            <input type="radio" name="meeting_id" id="date" value="{{$turno->id}}">
            {{ $turno->date->weekday." ".$turno->date->date." ".$turno->hour->time }}
            {{ " | "}}
            {{ $turno->professional->name." ".$turno->professional->lastname }}
            <br>
        @endforeach
        {{ $turnos->links() }} 
        <br>


        <input type="hidden" name="id_user" id="id_user" value="{{auth()->user()->id}}">


        <input type="submit" value="Pedir">
    </form>



</body>
</html>