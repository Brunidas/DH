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
}
