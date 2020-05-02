<?php

use Illuminate\Database\Seeder;

class SeederMedicalInsurance extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("medical_insurances")->insert(
            [
                "name" => "Sin Obra Social",
            ]
        );
    }
}
