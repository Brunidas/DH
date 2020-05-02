<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Fecha</title>
</head>
<body>

    <h1> Fechas </h1>
        
    <form action="/agregarDias" method="post">
            {{ csrf_field() }}
            <input type="submit" value="Agregar Dias">
    </form>
    
    <ul>
        @foreach( $fechas as $fecha)
        <li>
            {{ 'fecha:' . $fecha->date . "dia de la semana: " . $fecha->weekday }}
        </li>

        @endforeach
    </ul>

    <!-- <input type="date" name="" id="" > -->
    <!-- <input type="time" name="" id=""> -->


</body>
</html>