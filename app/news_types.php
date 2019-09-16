<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news_types extends Model
{
    //
    public function types()
    {
        return $this->hasMany('App\types','id','types_id');

    }
    public function news()
    {

        return  $this->hasMany('App\news','id','news_id');

    }
}
