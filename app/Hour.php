<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    public $guarded = [];

    public function meeting(){
        return $this->hasMany('App\Meeting','hours_id');
    }


}
