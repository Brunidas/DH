<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- css normalize -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <!-- jQuery UI -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">


  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">


  <!-- css's locales -->
  <link rel="stylesheet" href="css/style-header.css">
  <link rel="stylesheet" href="css/style-chrome-body.css">
  <link rel="stylesheet" href="css/style-chrome-footer.css">
  <link rel="stylesheet" href="css/turno.css">

  <!-- script jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- script popper.Lo usa bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- script bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- script jquery ui -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- script's locales -->
<script src="js/faq.js"></script>
<script src="js/turno.js"></script>

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

  <title>
    @yield("titulo")
  </title>
</head>



  <body>
    <?php
      /*
      if( isset($_COOKIE["usuarioCorreo"])==false && isset($_COOKIE["contrasenna"])==false){
          header("Location: 005login.php");
      };
      */
  ?>

  <header class="_bf_navbar">


      <div class="row">
          <div class="col">

              <a href="002home.php" class="d-flex justify-content-center justify-content-md-start">
                  <img class="_bf_logo-head" src="img/DHSALUD-logo-small.png">
              </a>

          </div>

          <div class="col-0 col-md-6 d-flex justify-content-md-end">
              <div class="_bf_botones">
                  <div>
                      <a href="007faq.php">
                          <img src="img/icons/FAQ-icono.png" alt="">
                      </a>
                  </div>
                  <div>
                      <a href="006contact.php">
                          <img src="img/icons/chat-icono.png" alt="">
                      </a>
                  </div>
                  <div>
                      <a href="#">
                          <img src="img/icons/notificaciones-icono.png" alt="">
                      </a>
                  </div>
                  <div>
                      <a href="004profile.php">
                          <img src="img/icons/usuario-icono.png" alt="">
                      </a>
                  </div>


              </div>
          </div>


      </div>





      <div class="d-flex justify-content-around d-md-none pt-3 pb-3">
          <div href="#">
              <a>
                  <img src="img/icons/FAQ-icono.png" alt="">
              </a>
          </div>
          <div href="#">
              <a>
                  <img src="img/icons/chat-icono.png" alt="">
              </a>
          </div>
          <div href="#">
              <a>
                  <img src="img/icons/notificaciones-icono.png" alt="">
              </a>
          </div>
          <div href="#">
              <a>
                  <img src="img/icons/usuario-icono.png" alt="">
              </a>
          </div>
          <div href="#">
              <a>
                  <img src="img/icons/usuario-icono.png" alt="">
              </a>
          </div>

      </div>

      <div>
          <a href="009logout.php">Cerrar Sesión</a>
      </div>

  </header>

<br>

    <section>

      @yield('principal')

    </section>

<br>

  <footer class="_bf_footer">

    <img class="_bf_logo-footer rounded mx-auto d-block" src="img/DHSALUD-logo-small.png" alt="">



    <div class="row d-flex justify-content-center">

        <div class="col-12 col-md-4 d-flex justify-content-center pt-3 pb-3 _bf_ubicacion">

            <a href="#" class="">
                <img src="img/icons/ubicacion-icono.png" alt="">
                Lorem ipsum dolor sit amet consectetur
            </a>

        </div>


        <div class="col-12 col-md-4 d-flex justify-content-around pt-3 pb-3 _bf_redes">

            <a href="#">
                <img src="img/icons/instagram.png" alt="">
            </a>

            <a href="#">
                <img src="img/icons/facebook.png" alt="">
            </a>

            <a href="#">
                <img src="img/icons/twitter.png" alt="">
            </a>

            <a href="#">
                <img src="img/icons/linkedin.png" alt="">
            </a>

        </div>

        <div class="col-12 col-md-4 d-flex justify-content-center pt-3 pb-3 _bf_contacto">
            <a href="#">
                <img src="img/icons/correo-icono.png" alt="">
                dhsalud@correomentira.com
            </a>

        </div>

    </div>






    </footer>
  </body>
</html>
