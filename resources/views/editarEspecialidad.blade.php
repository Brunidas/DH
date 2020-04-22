@extends("plantilla")

@section("titulo")
  Editar Especialidad
@endsection

@section("principal")

    <form action="/editarEspecialidad" method="post" >
        {{ csrf_field() }}
        {{ $especialidad["name"] }}
        <br>
        <!-- {{ $especialidad["id"] }} -->
        <div class="">
            <label for="name">Nuevo Nombre De Especialidad</label>
            <input type="text" name="name" id="" value="">
            <input type="hidden" name="id" id="" value="{{ $especialidad['id'] }}">
        </div>

        <div class="">
            <input type="submit" value="Guardar Cambios">
        </div>
    </form>

@endsection
