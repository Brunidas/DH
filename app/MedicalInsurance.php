<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalInsurance extends Model
{
    public $guarded = [];


    public function patients(){
        return $this->hasMany('App\Patient','medical_insurances_id');
    }

    
}
