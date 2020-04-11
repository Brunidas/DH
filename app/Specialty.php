<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    // public $table = "specialties";
    // public $primaryKey = "id";
    // public $timestamps = false;
    public $guarded = [];


    public function getNombreEspecialidad(){
        return "El nombre de la especialidad es: ". $this->name ;
    }
}
