<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specialty;

class SpecialtiesController extends Controller
{
    public function listado(){

        $especialidades = Specialty::all();
        
        // dd($especialidades);

        $vac = compact( "especialidades" );
            
        return view("especialidades", $vac);
    
    }

    public function borrar( Request $formulario ){
        $id = $formulario["id"];

        $especialidad = Specialty::find( $id );

        $especialidad->delete();

        return redirect("/especialidades");
    }


    public function agregar ( Request $formulario ){
        
        $especialidadNueva = new Specialty();
        
        $especialidadNueva->name = $formulario["name"];

        $especialidadNueva->save();

        return redirect("/especialidades");

    }



    public function editar( $id ){
        // return "Este es el id recibido: $id";

        $especialidad = Specialty::find( $id );
    
        $vac = compact( "especialidad" );
            
        return view("editarEspecialidad", $vac);
    }   

    public function completarEdicion( Request $formulario ){
        // echo "Este es el id recibido:". $formulario['id'] ;
        // echo "<br>";
        // echo "Este es el nuevo dato:" . $formulario['name'];

        $id = $formulario['id'];
        $nuevoNombre = $formulario['name'];

        $especialidad = Specialty::find( $id );
        
        $especialidad->name = $nuevoNombre;

        $especialidad->save();

        return redirect("/especialidades");
    }

}