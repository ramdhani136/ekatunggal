<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    Public function articles(){
        return $this->belongsTo('App\Articles');
    }
}
