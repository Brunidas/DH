<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Professional;
use Illuminate\Support\Facades\DB;
use App\Specialty;

class ProfessionalsController extends Controller
{
    
    
    public function listado(){

        $profesionales = DB::table('users')->join('professionals', 'users.id','=','professionals.user_id')->get();
        $especialidades = Specialty::all();

 
        $vac = compact( "profesionales","especialidades" );
            
        return view("profesionales", $vac);

    }
}
