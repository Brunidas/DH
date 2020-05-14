<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public $guarded = [];

    public function patient(){
        return $this->belongsTo("App\Patient", "patients_id");
    }

    public function professional(){
        return $this->belongsTo("App\Professional", "professionals_id");
    }

    public function date(){
        return $this->belongsTo("App\Date", "dates_id");
    }

    public function hour(){
        return $this->belongsTo("App\Hour", "hours_id");
    }

    
}
