<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MedicalInsurance;

class MedicalInsuranceController extends Controller
{
    public function listado(){

        $obrasSociales = MedicalInsurance::all();
        
        // dd($especialidades);

        $vac = compact( "obrasSociales" );
            
        return view("obrasSociales", $vac);
    
    }

    public function agregar ( Request $formulario ){
        
        $obraSocialNueva = new MedicalInsurance();
        
        $obraSocialNueva->name = $formulario["name"];

        $obraSocialNueva->save();

        return redirect("/obrasSociales");

    }

    public function borrar( Request $formulario ){
        $id = $formulario["id"];

        $obraSocial = MedicalInsurance::find( $id );

        $obraSocial->delete();

        return redirect("/obrasSociales");
    }

    public function editar( $id ){
        // return "Este es el id recibido: $id";

        $obraSocial = MedicalInsurance::find( $id );
    
        $vac = compact( "obraSocial" );
            
        return view("editarObraSocial", $vac);
    }


    public function completarEdicion( Request $formulario ){
        // echo "Este es el id recibido:". $formulario['id'] ;
        // echo "<br>";
        // echo "Este es el nuevo dato:" . $formulario['name'];

        $id = $formulario['id'];
        $nuevoNombre = $formulario['name'];

        $obraSocial = MedicalInsurance::find( $id );
        
        $obraSocial->name = $nuevoNombre;

        $obraSocial->save();

        return redirect("/obrasSociales");
    }

}
