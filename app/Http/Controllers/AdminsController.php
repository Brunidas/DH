<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;
use App\Admin;

class AdminsController extends Controller
{
    public function listado(){
    
        $adminstradores = DB::table('users')->join('admins', 'users.id','=','admins.user_id')->get();

        $vac = compact( "adminstradores" );
            
        return view("administradores", $vac);
    }

    public function listadoUsuarios(){
        $usuarios = User::all();

        $vac = compact( "usuarios" );

        return view('agregarAdministrador',$vac);
    }


    public function agregar( Request $formulario ) {
        $id = $formulario["id"];

        $usuario = User::find( $id );

        $usuario->admin = True;
        $usuario->professional = False;

        $nuevoAdmin = new Admin();
        $nuevoAdmin->user_id = $id;

        $usuario->save();
        $nuevoAdmin->save();

        return redirect("/adminstradores");

    }

    public function eliminar( Request $formulario ){
        $id = $formulario["id"];

        echo $id;
        $admin = Admin::find( $id );
        $id_usuario = $admin->user_id;
        $admin->delete();

        $usuario = User::find( $id_usuario );
        $usuario->admin = False;
        $usuario->save();

        return redirect("/adminstradores");
    }
    
}
