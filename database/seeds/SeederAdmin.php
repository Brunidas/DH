<?php

use Illuminate\Database\Seeder;

use App\User;


class SeederAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $admins = User::all();
        
        $primero = $admins->first();

        DB::table("admins")->insert(
            [
                "user_id" => $primero->id
            ]
        );
    }
}
