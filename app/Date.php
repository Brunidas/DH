<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public $guarded = [];


    public function meeting(){
        return $this->hasMany('App\Meeting','dates_id');
    }


}
