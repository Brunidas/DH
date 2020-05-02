<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Turno</title>
</head>
<body>

    <h1> {{ "@" }}{{ auth()->user()->user }} </h1>
    <h1>Crear Turno Nuevo</h1>
    @if ( $error != [] )
        {{ "FECHA NO VALIDA" }}
    @endif

    <form action="/crearTurno" method="post">
        {{ csrf_field() }}

        <label for="hours">Elegir horario</label>
        <select id="hours" name="hours_id">
            @foreach ( $horas as $hora )
                <option name="hours_id" value="{{ $hora->id }}">{{ $hora->time }}</option>
            @endforeach
        </select>
        <br>

        <label for="date">Elegir fecha:</label>
        <br>
        @foreach ( $fechas as $fecha )
            <input type="radio" name="dates_id" id="date" value="{{$fecha->id}}">
            {{ $fecha->weekday. " ". $fecha->date }}
            <br>
        @endforeach
        {{ $fechas->links() }} 
        <br>

        <input type="hidden" name="id" value="{{ $profesionalActual->id }}">
        

        <input type="submit" value="Crear Turno">
    </form> 

    <br>
    {{ "Turnos Ya Creados: "}} <br>
    @foreach( $profesionalActual->meetings as $turno )
        <br>
        {{ $turno->date->weekday ." ". $turno->date->date }} <br>
        {{ $turno->hour->time }}<br>
    @endforeach
    <br>

    
</body>
</html>