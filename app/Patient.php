<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $guarded = [];


    public function user(){
        return $this->belongsTo("App\User", "user_id");
    }

    public function medicalInsurance(){
        return $this->belongsTo("App\MedicalInsurance", "medical_insurances_id");
    }

    public function meetings(){
        return $this->hasMany('App\Meeting','patients_id');
    }


}

