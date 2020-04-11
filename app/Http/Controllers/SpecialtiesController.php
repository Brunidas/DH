<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Specialty;

class SpecialtiesController extends Controller
{
    public function listado(){
        // dd("Llegue bien :D");

        // $especialidades = [
        //     0 => "ALERGIA E INMUNOLOGÍA",
        //     1 => "ANATOMÍA PATOLÓGICA",
        //     2 => "ANESTESIOLOGÍA",
        //     3 => "ANGIOLOGÍA GENERAL y HEMODINAMIA",
        //     4 => "CARDIOLOGÍA"
        // ];

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
}
