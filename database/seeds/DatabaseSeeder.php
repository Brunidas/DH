<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeederSpecialty::class);

        $this->call(SeederUser::class);

        $this->call(SeederAdmin::class);

        $this->call(SeederMedicalInsurance::class);

        $this->call(SeederHour::class);

        $this->call(SeederProfessional::class);

        $this->call(SeederPatient::class);        
    }
}
