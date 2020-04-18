<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Obra Social</title>
</head>
<body>
    <form action="/agregarObraSocial" method="post" >
        {{ csrf_field() }}  
        <div class="">
            <label for="name">Nombre Obra Social</label>
            <input type="text" name="name" id="" value="">
        </div>

        <div class="">
            <input type="submit" value="Agregar Obra Social">
        </div>
    </form>
</body>
</html>