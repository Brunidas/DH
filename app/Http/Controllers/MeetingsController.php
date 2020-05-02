<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Meeting;
use App\Specialty;
use App\Professional;
use App\Patient;
use App\Date;
use App\Hour;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



class MeetingsController extends Controller
{
    public function listadoProfesional( $id ){
        
        $profesionales = Professional::all();

        foreach ($profesionales as $profesional ) {
            if ( $profesional->user_id == $id ) {
                $profesionalActual = $profesional;
            }
        }
        

        $vac = compact("profesionalActual");

        return view("turnosProfesional", $vac);

    }   



    public function crearTurno( $id ){
        

        $horas = Hour::all();
        
        $fechas = Date::paginate(5);


        $profesionales = Professional::all();

        foreach ($profesionales as $profesional ) {
            if ( $profesional->user_id == $id ) {
                $profesionalActual = $profesional;
            }
        }
        

        $error = [];
        $vac = compact("profesionalActual","horas","fechas","error");

        return view("/crearTurno", $vac);

    }   


    public function completarAgregado( Request $formulario  ){
        
        $turnos = Meeting::where("professionals_id", $formulario["id"] )->get();

        $horas = Hour::all();
        
        $fechas = Date::paginate(5);

        $profesionalActual = Professional::find( $formulario["id"] );

        $error = [];

        foreach ( $turnos as $turno ) {
            
            if ( $turno->hours_id == $formulario["hours_id"] & $turno->dates_id == $formulario["dates_id"] ) {
                $error = [
                    "hours_id" => $formulario["hours_id"],
                    "dates_id" => $formulario["dates_id"],
                ];

                $vac = compact("profesionalActual","horas","fechas","error");
                return view("/crearTurno", $vac);
            
            }
        }


        $nuevoTurno = new Meeting();
        $nuevoTurno->professionals_id = $formulario["id"];
        $nuevoTurno->hours_id = $formulario["hours_id"];
        $nuevoTurno->dates_id = $formulario["dates_id"];
        
        $nuevoTurno->save();
        
        $id = $formulario['hours_id'];

        return redirect("/turnosProfesional/$id");


    }


    public function eliminarTurno( Request $formulario  ){
        $id_turno = $formulario["id_turno"];
        $id_user = $formulario["id_user"];

        
        $turno = Meeting::find( $id_turno );

        $turno->delete();

        return redirect("/turnosProfesional/$id_user");

    }


    public function listadoUsuario( $id ){

        $pacientes = Patient::where("user_id", $id )->get();

        $vac = compact("pacientes");
        
        return view("turnosUsuario",$vac );

    }
    

    public function turnoUsuario( $id ){
        $turnos = Meeting::where("patients_id", NULL )->paginate(5);
        
        $especialidad = Specialty::find($id);

        $profesionales = Professional::all();

        $vac = compact("turnos","profesionales","especialidad");

        return view("/pedirTurno",$vac );
    }

    public function turnoUsuarioCompletar( Request $formulario  ){
        $pacinete_id = $formulario["patients_id"];
        
        $turno =  Meeting::find( $formulario["meeting_id"] );

        $turno->patients_id = $pacinete_id;

        $turno->save();

        $id_user = $formulario["id_user"];

        return redirect("/turnosUsuario/$id_user");

    }
    

}
