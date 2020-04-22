@extends("plantilla")

@section("titulo")
  Contacto
@endsection

@section("principal")

<form>
<div class="container">

<h1 class="text-center">¿Consultas?</h1>
<h2 class="text-center">¡Podemos ayudarte!</h2>
<form action="006contact.php" method="POST">
    <div class="row d-flex flex-wrap justify-content-around">


      <input type="text" class="form-control col-10 col-md-4 col-lg-4 col-xl-4 my-3" id="nombre" placeholder="Nombre">
    </div>
  <div class="row d-flex flex-wrap justify-content-around">

    <input type="email" class="form-control col-10 col-md-4 col-lg-4 col-xl-4 mb-3" id="email" aria-describedby="emailHelp" placeholder="E-mail" >

  </div>
 <div class="row d-flex flex-wrap justify-content-around">

    <input type="text" class="form-control col-10 col-md-4 col-lg-4 col-xl-4 mb-3" id="telefono" placeholder="Teléfono">

  </div>
  <div class="row d-flex flex-wrap justify-content-around">

    <input type="text" class="form-control col-10 col-md-4 col-lg-4 col-xl-4 mb-3" id="motivo" placeholder="Motivo">

  </div>

    <div class="row d-flex flex-wrap justify-content-around">

      <textarea class="form-control col-10 col-md-4 col-lg-4 col-xl-4 mb-4" id="consulta" rows="5" placeholder="Consulta"></textarea>
    </div>
    <div class="row d-flex flex-wrap justify-content-around">
  <button id="boton" type="submit" class="btn btn-primary btn-lg  px-5 mb-4 ">Enviar</button>
  </div>
</form>
</div>



@endsection