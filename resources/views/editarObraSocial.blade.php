<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar obra social</title>
</head>
<body>
    <form action="/editarObraSocial" method="post" >
        {{ csrf_field() }}
        {{ $obraSocial["name"] }}
        <br>
        <div class="">
            <label for="name">Nuevo Nombre De Obra Social</label>
            <input type="text" name="name" id="" value="">
            <input type="hidden" name="id" id="" value="{{ $obraSocial['id'] }}">
        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>
</body>
</html>