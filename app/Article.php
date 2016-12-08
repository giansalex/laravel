<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function setNewName($newName){
        $this->name = $newName;
        $this->save();
    }

    function author(){
        $this->belongsTo('App\Author');
    }
}
