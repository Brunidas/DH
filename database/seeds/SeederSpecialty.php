<?php

use Illuminate\Database\Seeder;

class SeederSpecialty extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("specialties")->insert(
            [
                "name" => "ANESTESIOLOGÍA"
            ]
        );
    }
}
