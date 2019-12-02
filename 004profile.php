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
            <h4 style="color:#00b1b1;"><span> Nombre Completo</h4></span>

            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">


<div class="col-sm-5 col-xs-6 tital " >Documento:</div><div class="col-sm-7 ">22.987.654</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Teléfono:</div><div class="col-sm-7">2613456789</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " > E-mail:</div><div class="col-sm-7">dh@correo.com</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Obra social:</div><div class="col-sm-7">Swiss Medical</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>
<div class="col-sm-5 col-xs-6 tital " >N° Afiliado</div><div class="col-sm-7">128739823</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Fecha de nacimiento:</div><div class="col-sm-7">10 de Marzo 1998</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Nacionalidad:</div><div class="col-sm-7">Argentina</div>

 <div class="clearfix"></div>
<div class="bot-border"></div>
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
