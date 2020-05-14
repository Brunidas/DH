<?php

use Illuminate\Database\Seeder;

class SeederHour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horarios = [ 
            "9:00",
            "9:30"  ,
            "10:00" ,
            "10:30" ,
            "11:00" ,
            "11:30" ,
            "12:00" ,
            "12:30",
            "13:00",
            "13:30",
            "14:00",
            "14:30",
            "15:00",
            "15:30",
            "16:00",
            "16:30",
            "17:00",
        ];
        
        
        
        foreach ($horarios as $horario ) {
            
            DB::table("hours")->insert(
                ["time" => $horario ],
            );

        }

    }
}
