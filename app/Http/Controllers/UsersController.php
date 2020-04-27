<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
// use App\Admin;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function listado(){

        $usuarios = User::all();
        
        // return $usuarios;
        $vac = compact( "usuarios" );
            
        return view("usuarios", $vac);
    
    }


    public function agregar ( Request $formulario ){
        
        $mensajes =[
            "string" => "El campo :attribute debe ser de rexto",
            "unique" => "Ya esta en uso",
            "integer" => "El campo :attribute deber ser un entero",
            "required" => "El campo :attribute es obligatorio",
            "max" => "El campo :attribute tiene un maximo de :max",
            "email" => "El campo :attribute debe ser un correo electronico",
            "min" => "El campo :attribute tiene un minimo de :min",
        ];

        $reglas = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user' => ['required', 'string', 'min:6','unique:users'],
            'lastname' => [ 'required' ,'string','max:255'],
            'dni'=>['required', 'integer','min:0','unique:users' ]
        ];

        $this->validate( $formulario, $reglas, $mensajes);
    
        $usuarioNuevo = new User();
        
        $usuarioNuevo->user = $formulario["user"];
        $usuarioNuevo->name = $formulario["name"];
        $usuarioNuevo->lastname = $formulario["lastname"];
        $usuarioNuevo->dni = $formulario["dni"];
        $usuarioNuevo->email = $formulario["email"];
        $usuarioNuevo->password = Hash::make( $formulario["password"] );

        $usuarioNuevo->save();

        return redirect("/usuarios");
    }

    public function borrar( Request $formulario){
        $id = $formulario["id"];

        $usurio = User::find( $id );

        $usurio->delete();

        return redirect("/usuarios");
    }


    public function editar( $id ){

        $usuario = User::find( $id );
    
        $vac = compact( "usuario" );
            
        return view("editarUsuario", $vac);
    }

    public function completarEdicion( Request $formulario ){
        // echo $formulario["name"] ."<br>";
        // echo $formulario["lastname"] ."<br>";
        // echo $formulario["user"] ."<br>";
        // echo $formulario["email"] ."<br>";
        // echo $formulario["dni"] ."<br>";


        $mensajes =[
            "string" => "El campo :attribute debe ser de rexto",
            "unique" => "Ya esta en uso",
            "integer" => "El campo :attribute deber ser un entero",
            "required" => "El campo :attribute es obligatorio",
            "max" => "El campo :attribute tiene un maximo de :max",
            "email" => "El campo :attribute debe ser un correo electronico",
            "min" => "El campo :attribute tiene un minimo de :min",
        ];

        $reglas = [
            'name' => ['required', 'string', 'max:255'],
            'user' => ['required', 'string', 'min:6','unique:users'],
            'lastname' => [ 'required' ,'string','max:255'],
            'dni'=>['required', 'integer','min:0','unique:users' ]
        ];
    
        $this->validate( $formulario, $reglas, $mensajes);


        $id = $formulario['id'];

        $nuevoNombre = $formulario['name'];
        $nuevoApellido = $formulario["lastname"];
        $nuevoUsuario = $formulario["user"]; 
        $nuevoDni = $formulario["dni"];

        $usuario = User::find( $id );

        $usuario->name = $nuevoNombre;
        $usuario->lastname = $nuevoApellido;
        $usuario->user = $nuevoUsuario;
        $usuario->dni =$nuevoDni;


        $usuario->save();

        return redirect("/usuarios");

    }


}
