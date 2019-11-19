
<!DOCTYPE html>
<html lang="es">



<?php include_once "components/head.php"; ?>

<body>


    <?php include_once "components/header.php"; ?>

    <div class="container">
        <div class="_bf_titulos">
            <h2>Cartilla de</h2>
            <h1>Especialidades</h1>
        </div>

        <div class="_bf_especialidades">
            <?php for($i=1;$i<=8;$i++): ?>

                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <button type="submit">
                            Especialidad 1
                        </button>
                        <button type="submit">
                            Especialidad 1
                        </button>
                        <button type="submit">
                            Especialidad 1
                        </button>
                    </div>
                </div>

                <?php if ($i!=8): ?>
                    <div class="row">
                        <div class="_bf_espacioEntreBotonoes col">
                        </div>
                    </div>
                <?php else: ?>
                <?php endif ;?>


            <?php endfor; ?>




        </div>


    </div>

    <?php include_once "components/footer.php"; ?>

    <?php include_once "components/scripts.php"; ?>
</body>
</html>

