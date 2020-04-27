<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Professional;
use Illuminate\Support\Facades\DB;

use App\Specialty;
use App\User;



class ProfessionalsController extends Controller
{
    
    
    public function listado(){

        $profesionales = DB::table('users')->join('professionals', 'users.id','=','professionals.user_id')->get();
        $especialidades = Specialty::all();
 
        $vac = compact( "profesionales","especialidades");
            
        return view("profesionales", $vac);

    }

    public function listadoUsuarios(){
        
        $usuarios = User::all();

        $vac = compact( "usuarios" );
            
        return view("agregarProfesional", $vac);

    }

    public function datosNecesarios( $id ){
        $especialidades = Specialty::all();

        $vac  = compact("id","especialidades");

        return view("hacerProfesional", $vac);
    }

    public function agregar( Request $formulario ){
        $id_usuario = $formulario["id"];
        $id_especilidad = $formulario["specialty_id"];
        $matricula = $formulario["enrollment"];

        $usuario = User::find( $id_usuario );
        $usuario->admin = False; 
        $usuario->professional = True;


        $nuevoProfesional = new Professional();
        $nuevoProfesional->enrollment = $matricula;
        $nuevoProfesional->specialties_id = $id_especilidad;
        $nuevoProfesional->user_id = $id_usuario;



        $nuevoProfesional->save();
        $usuario->save();
        
        return redirect("/profesionales");

    }   


    public function eliminar( Request $formulario  ){
        
        $id_profesional = $formulario["id"];
        $id_usuario = $formulario["user_id"];

        echo "id profesional" .$id_profesional . "<br>";
        echo "id usuaio" . $id_usuario . "<br>";

        $usuario = User::find( $id_usuario );
        $usuario->professional = False;
        $usuario->save();

        $profesional = Professional::find( $id_profesional );
        echo $profesional . "<br>";
        $profesional->delete();



        return redirect("/profesionales");



    }
}
