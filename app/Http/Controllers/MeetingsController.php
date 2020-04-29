<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Meeting;
use App\Specialty;
use App\Professional;
use App\Patient;

class MeetingsController extends Controller
{
    public function nuevo( $id ){
        
        $especialidad = Specialty::find( $id );

        $profesionales = Professional::all();

        $pacientes = Patient::all();

        $vac = compact("especialidad","profesionales","pacientes");

        return view('/crearTurno',$vac);
    }




}
