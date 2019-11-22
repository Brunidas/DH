


<?php


?>

<!DOCTYPE html>
<html lang="es">
<head>
<style>
form{
margin:  auto;
width: 400px;
padding:25px 20px;
background: rgba(0,170,228,0.8);
box-sizing: border-box;
margin-top:20px;
border-radius:7px;
}

input{
width:100%;
margin-bottom: 20;
padding: 5px;
box-sizing: border-box;
font-size:17;
border: none;



}

</style>
</head>



<?php include_once "components/head.php"; ?>

<body>


    <?php include_once "components/header.php"; ?>

    <div class="container">
        <div class="_bf_titulos">
            <h1 class="">Registro</h1>
        </div>



        <div class="row d-flex flex-wrap justify-content-around">
            <form action="003form.php" method="POST">


                <input id="nombres" type="text" name="nombres" placeholder="Nombres">
                <p></p>
                <input id="Apellidos" type="text" name="apellidos" placeholder="Apellidos">
                <p></p>
                <input id="Edad" type="text" name="Edad" placeholder="Edad">
                <p></p>
                <input id="D.N.I." type="text" name="D.N.I." placeholder="D.N.I.">
                <p></p>
                <label for="Sexo">Sexo:</label>
                <select class="" name="Sexo" id="Sexo">
                <option value="A">
                Masculino
                <option value="B">
                Femenino
                <option value="C">
                Otros
                <p></p>
                <input id="Direccion" type="text" name="Direccion" placeholder="Direccion">
                <p></p>
                <input id="Localidad" type="text" name="Localidad" placeholder="Localidad">
                <p></p>
                <input id="Celular" type="text" name="Celular" placeholder="Celular">
                <p></p>
                <input id="email" type="email" name="email" placeholder="E-mail">
                <p></p>
                <label for="social">Obra Social:</label>

                <select class="" name="social" id="social">
                    <option value="A">
                    Osep
                    <option value="B">
                    Galeno
                    <option value="C">
                    Cimesa
                    <option value="D">
                    Osde
                    <option value="F">
                    SancorSalud
                    <option value="G">
                    Ninguna


                </select>
                <br>
                <input id="enviar" type="submit" value="Enviar" >

                <div class="">
                    <p>¿Ya eres usuario?</p>
                    <a href="">Click aqui</a>
                </div>
            </form>


        </div>


    </div>



    <?php include_once "components/footer.php"; ?>
    <?php include_once "components/scripts.php"; ?>
</body>
</html>

