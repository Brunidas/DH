<?php

use Illuminate\Database\Seeder;

class SeederProfessional extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("professionals")->insert(
            [
                "enrollment" => 7218,
                "name" => "Roberto",
                "lastname" => "Gutierrez",
                "phone_number" => 123123123,
                "specialties_id" => 1,
                "user_id" => 2,
            ]   
        );
    }
}
