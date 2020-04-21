<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Admin;

class UsersController extends Controller
{
    public function listado(){

        $usuarios = User::all();
        
        // return $usuarios;
        $vac = compact( "usuarios" );
            
        return view("usuarios", $vac);
    
    }






}
