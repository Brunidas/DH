<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// use App\User;
use App\Admin;

class AdminsController extends Controller
{
    public function listado(){
    
        $adminstradores = DB::table('users')->join('admins', 'users.id','=','admins.user_id')->get();

        $vac = compact( "adminstradores" );
            
        return view("administradores", $vac);

    }



}
