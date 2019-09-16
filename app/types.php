<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class types extends Model
{
    //
    public function category()
    {
        return $this->belongsTo('App\category','category_id');
    }
    public function news()
    {
        return $this->belongsToMany('App\news','news_types','type_id','news_id');

    }
}
