<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1> {{ "@" }}{{ auth()->user()->user }} </h1>
    <h1> Mis Turnos: </h1>

    <form action="/crearTurno/{{ $profesionalActual->user_id }}" method="get">
        {{ csrf_field() }}
        <input type="submit" value="Agregar Turno Nuevo">
    </form>


    {{ "Turnos Sin Paciente: "}} <br>
    @foreach( $profesionalActual->meetings as $turno )
        @if ( $turno->patient == null )
            <br>
            <form action="/eliminarTurno/" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_turno" value="{{ $turno->id }}">
                <input type="hidden" name="id_user" value="{{ $profesionalActual->user_id }}">
                <input type="submit" value="Eliminar">
            </form>

            {{ $turno->date->weekday ." ". $turno->date->date }} <br>
            {{ $turno->hour->time }}<br>
        @endif
    @endforeach
    <br>

    <hr>

    {{ "Turnos Pendientes: "}} <br>
    @foreach( $profesionalActual->meetings as $turno )
        @if ( $turno->patient != null )
            <br>
            <form action="/eliminarTurno/" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_turno" value="{{ $turno->id }}">
                <input type="hidden" name="id_user" value="{{ $profesionalActual->user_id }}">
                <input type="submit" value="Eliminar">
            </form>
            {{ $turno->date->weekday ." ". $turno->date->date }} <br>
            {{ $turno->hour->time }}<br>
            {{ "Paciente : " . $turno->patient->name. " ". $turno->patient->lastname}}<br>
            {{ "Obra Social : " . $turno->patient->medicalInsurance->name  }}<br>
            {{ "Dni: " . $turno->patient->dni  }}<br>
            {{ "Numero de Telefono: " . $turno->patient->phone_number}}<br>
        @endif
    @endforeach
    <br>

</body>
</html>