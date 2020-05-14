<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass = Hash::make( 12345678 );
        
        DB::table("users")->insert(
            [
                "user" => "administrador",
                "password" => $pass,
                "email" => "admin@correo.com",
                "admin" => True,
                "professional" => False
            ]
        );
        
        DB::table("users")->insert(
            [
                "user" => "santaclara_RobertoGutierrez",
                "password" => $pass,
                "email" => "RobertoGutierrez@santaclara.com",
                "admin" => False,
                "professional" => True
            ]
        );


    }
}
