@extends("plantilla")

@section("titulo")
  Especialidades
@endsection

@section("principal")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header bg-info text-white"><h3>Especialidades:</h3></div>

                    <div class="card-body">

                        <form action="agregarEspecialidad" method="get">
                            {{ csrf_field() }}
                            <input class="btn btn-success mb-2" type="submit" value="Agregar Especialidad">
                        </form>

                        <ul class="list-group">
                            @foreach( $especialidades as $especiliadad)
                            <li class="list-group-item" >
                                <h5>
                                    {{ $especiliadad->name }}
                                </h5>

                                <form class="d-inline" action="borrarEspecialidad" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value= "{{ $especiliadad->id }}" >
                                    <input class="btn btn-danger"type="submit" value="Borrar">
                                </form>

                                <form  class="d-inline" action="editarEspecialidad/{{ $especiliadad->id }}" method="get">
                                    {{ csrf_field() }}
                                    <input class="btn btn-primary" type="submit" value="Editar">
                                </form>

                            </li>
                            <br>
                            @endforeach
                        </ul>




                    </div>



                </div>
            </div>
        </div>
    </div>






    </p>
@endsection
