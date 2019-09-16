<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable=[
        'user_id','title','topic','acceptable'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');

    }
    public function types()
    {
        return $this->belongsToMany('App\types','news_types','news_id','type_id');

    }
    public function date(){
        return date('d F Y', strtotime($this->created_at));
    }

    public function categories(){
        return $this->hasManyThrough('App\types','App\category','id','category_id');
    }
}
