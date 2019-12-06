<?php
session_start();
$arrayUsuarios = file_get_contents("usuarios.json");
        $arrayUsuarios = explode(PHP_EOL, $arrayUsuarios);
        array_pop($arrayUsuarios);
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);}

            //var_dump($userFinal);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once 'components/head.php'; ?>
  <link rel="stylesheet" href="css/style-profile.css">
  <body>
    <?php include_once 'components/header.php' ?>
    <div class="container">

	  <div class="row pt-4">
   <div class="col-md 2 col-lg 2"></div>
    <div class="col-md-6 col-lg-6 ">

    <div class="panel panel-default">
     <div class="panel-heading bg-primary text-white">  <h4 ><b>Mi perfil</h4></b></div>
   <div class="panel-body" id="panelPerfil">

    <div class="box box-info">

            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive">

                <input id="profile-image-upload" class="hidden" type="file">
                <div style="color:#999;" >Click imagen para cambiar foto</div>
                <!--Upload Image Js And Css-->
             </div>

              <br>

              <!-- /input-group -->
            </div>
            <br>
            <div class="col-sm-6 text-center">
            <h4 style="color:#00b1b1;"><span> <?php echo $userFinal['nombre']." ".$userFinal['apellido'] ?></h4></span>

            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


<div class="col-sm-5 col-xs-6 tital ">Documento:</div><div class="col-sm-7 "><?php echo $userFinal['dni'] ?></div> 
     <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Celular:</div><div class="col-sm-7"><?php echo $userFinal['celular'] ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " > E-mail:</div><div class="col-sm-7"><?php echo $userFinal['email'] ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Obra social:</div><div class="col-sm-7"><?php echo $userFinal['obraSocial'] ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >Edad</div><div class="col-sm-7"><?php echo $userFinal['edad'] ?></div>


          <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
     </div>
    </div>
</div>
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});
              </script>
<div class=" col-md 2 col-lg 2"></div>
</div>
</div>
<?php include_once 'components/footer.php' ?>
<?php include_once "components/scripts.php"; ?>
</body>
</html>
