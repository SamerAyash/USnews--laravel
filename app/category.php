<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function types()
    {
        return $this->hasMany('App\types');
    }

    public function news(){
        return $this->hasManyThrough('App\news','App\types','id','did');
    }

}
