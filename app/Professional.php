<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use App\Specialty;

class Professional extends Model
{
    public $guarded = [];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function specialty(){
        return $this->belongsTo("App\Specialty", "specialties_id");
    }

    public function meetings(){
        return $this->hasMany('App\Meeting','professionals_id');
    }

}
