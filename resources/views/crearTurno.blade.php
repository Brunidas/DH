<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Turno</title>
</head>
<body>
    <h1> {{ $especialidad->name }} </h1>

    <label for="professional">Elegir un profesional </label>
    <select id="professional" name="professional_id">
        @foreach ( $profesionales as $profesional)
            @if ( $especialidad->id == $profesional->specialties_id )     
                <option name="professional_id" value="{{ $profesional->id }}">{{ "$profesional->name $profesional->lastname" }}</option>
            @endif
        @endforeach
    </select>
    <br>

    <label for="patient">Elegir un paciente </label>
    <select id="patient" name="patient_id">
        @foreach ( $pacientes as $paciente )
            @if ( $paciente->user_id == auth()->user()->id )
                <option name="patient_id" value="{{ $paciente->id }}">{{ "$paciente->name $paciente->lastname" }}</option>
            @endif
        @endforeach
    
    </select>
    <br>

</body>
</html>