<?php

use Illuminate\Database\Seeder;

class SeederPatient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("patients")->insert(
            [
                "medical_insurances_id" => 1,
                "name" => "Bruno",
                "lastname" => "Fuentes",
                "dni" => 40597336,
                "account_holder"=> True,
                "membership_number"=> 1,
                "adress"=> "cardenal",
                "province"=>"Mendoza",
                "phone_number"=>13123132,
                "user_id"=>1,

            ]   
        );
    }
}
