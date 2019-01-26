<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['photo','category_id','title','size'];


    public function category(){
        return $this->belongsTo('App\Category');
    }
}
