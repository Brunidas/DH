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
        $name= $formulario["name"];
        $lastname= $formulario["lastname"];
        $phone_number= $formulario["phone_number"];


        $mensajes =[
            "string" => "El campo :attribute debe ser de texto",
            "unique" => ":attribute ya esta en uso",
            "integer" => "El campo :attribute deber ser un entero",
            "required" => "El campo :attribute es obligatorio",
            "max" => "El campo :attribute tiene un maximo de :max",
            "email" => "El campo :attribute debe ser un correo electronico",
            "min" => "El campo :attribute tiene un minimo de :min",
        ];

        $reglas = [
            'enrollment'=>['required', 'integer','min:0','unique:professionals' ],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => [ 'required' ,'string','max:255'],
            'phone_number'=>['required', 'integer','min:0','unique:patients' ],
        ];

        $this->validate( $formulario, $reglas, $mensajes);



        $usuario = User::find( $id_usuario );
        $usuario->admin = False; 
        $usuario->professional = True;


        $nuevoProfesional = new Professional();
        $nuevoProfesional->enrollment = $matricula;
        $nuevoProfesional->specialties_id = $id_especilidad;
        $nuevoProfesional->user_id = $id_usuario;
        
        $nuevoProfesional->name = $name;
        $nuevoProfesional->lastname = $lastname;
        $nuevoProfesional->phone_number = $phone_number;


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
