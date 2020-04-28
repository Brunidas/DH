<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Paciente</title>
</head>
<body>
    <ul>
        @foreach( $errors->all() as $error )
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    <form action="/agregarPaciente" method="post" >
        {{ csrf_field() }}  
        <div class="">
            <br>

            <input type="hidden" name="user_id" id="" value="{{ auth()->user()->id }}">

            <label for="name">Nombre: </label>
            <input type="text" name="name" id="" value="{{ old('name') }}">
            <br>

            <label for="lastname">Apellido: </label>
            <input type="text" name="lastname" id="" value="{{ old('lastname') }}">
            <br>

            <label for="dni">Dni: </label>
            <input type="text" name="dni" id="" value="{{ old('dni') }}">
            <br>

            <label for="membership_number">Numero de socio: </label>
            <input type="text" name="membership_number" id="" value="{{ old('membership_number') }}">
            <br>
            <label for="membership_number">En caso de no tener obra social poner "0" </label>
            <br>

            <label for="adress">Direccion: </label>
            <input type="text" name="adress" id="" value="{{ old('adress') }}">
            <br>

            <label for="province"> Provincia: </label>
            <input type="text" name="province" id="" value="{{ old('province') }}">
            <br>

            <label for="phone_number">Numero de telefono: </label>
            <input type="text" name="phone_number" id="" value="{{ old('phone_number') }}">
            <br>


            


            @php
                $collection = collect([]);
            @endphp

            @foreach ( $pacientes as $paciente)
                @if( $paciente->user_id == $id )
                    @php
                        $collection->push( $paciente->user_id );
                    @endphp
                @endif
            @endforeach
            

            @php
                if ( $collection->isEmpty() ){

                    @endphp

                    <label for="medical_insurances">Elegir una obra social</label>
                    <select id="medical_insurances" name="medical_insurances_id">
                        @foreach ( $obrasSociales as $obrasSocial)
                        <option name="medical_insurances_id" value="{{ $obrasSocial->id }}">{{ $obrasSocial->name }}</option>
                        @endforeach
                    </select>
                    
                    @php

                } else{
                    
                }

            @endphp


        </div>

        <div class="">
            <input type="submit" value="Agregar Paciente">
        </div>
    </form>
</body>
</html>