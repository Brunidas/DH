<?php

    $cantidadEspecialidades = 23;
?>



<!DOCTYPE html>
<html lang="es">



<?php include_once "components/head.php"; ?>

<body>


    <?php include_once "components/header.php"; ?>

    <div class="container">
        <div class="_bf_titulos">
            <h2>Cartilla de</h2>
            <h1 class="">Especialidades</h1>
        </div>



        <div class="row d-flex flex-wrap justify-content-around">

            <?php for($i=1;$i<=$cantidadEspecialidades;$i++): ?>

                <div class="col-sm-6 col-md-5 col-lg-4 d-flex justify-content-center">
                    <button class="_bf_especialidades" type="submit">
                        Especialidad <?=$i;?>
                    </button>
                </div>



            <?php endfor; ?>


        </div>




    </div>

    <?php include_once "components/footer.php"; ?>

    <?php include_once "components/scripts.php"; ?>
</body>
</html>

