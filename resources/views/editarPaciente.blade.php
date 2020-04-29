<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
</head>
<body>

    <ul>
        @foreach( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
        @endforeach
    </ul>
        
    <form action="/editarPaciente" method="post" >
        {{ csrf_field() }}
        <br>
        <div class="">
            <input type="hidden" name="id" id="" value="{{ $paciente['id'] }}">
            <input type="hidden" name="user_id" value="{{ $paciente['user_id'] }}">

            <label for="name">Nombre: </label>
            <input type="text" name="name" id="" value="{{ $paciente['name'] }}">
            <br>

            <label for="lastname">Apellido: </label>
            <input type="text" name="lastname" id="" value="{{ $paciente['lastname'] }}">
            <br>

            <label for="dni">Dni: </label>
            <input type="text" name="dni" id="" value="{{ $paciente['dni'] }}">
            <br>            

            <label for="membership_number">Numero de socio: </label>
            <input type="text" name="membership_number" id="" value="{{ $paciente['membership_number'] }}">
            <br>
            <label for="membership_number">En caso de no tener obra social poner "0" </label>
            <br>

            <label for="adress">Direccion: </label>
            <input type="text" name="adress" id="" value="{{ $paciente['adress'] }}">
            <br>

            <label for="province"> Provincia: </label>
            <input type="text" name="province" id="" value="{{ $paciente['province'] }}">
            <br>

            <label for="phone_number">Numero de telefono: </label>
            <input type="text" name="phone_number" id="" value="{{ $paciente['phone_number'] }}">
            <br>

            @if( $paciente['account_holder'] == True )
                <label for="medical_insurances">Elegir una obra social</label>
                <select id="medical_insurances" name="medical_insurances_id">
                    @foreach ( $obrasSociales as $obrasSocial)
                    <option name="medical_insurances_id" value="{{ $obrasSocial->id }}">{{ $obrasSocial->name }}</option>
                    @endforeach
                </select>
            @endif 

        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
</body>
</html>