<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    function article(){
       $this->hasOne('App\Article');
    }

    function phone(){
        $this->hasMany('App\Phone');
    }
}
