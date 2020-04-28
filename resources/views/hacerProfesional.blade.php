<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar datos para profesional</title>
</head>
<body>
    <ul>
        @foreach( $errors->all() as $error )
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    
    
    <form action="/agregarProfesional" method="post" >
        {{ csrf_field() }}
        <br>
        <div class="">
            <input type="hidden" name="id" id="" value="{{ $id }}">

            <label for="enrollment">Matricula: </label>
            <input type="text" name="enrollment" id="" value="">
            <br>

            <label for="specialty">Elegir una especialidad</label>
            <select id="specialty" name="specialty_id">
                @foreach ( $especialidades as $especialidad)
                <option name="specialty_id" value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                @endforeach
            </select>
            <br>

        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
    

</body>
</html>