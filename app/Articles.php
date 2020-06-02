<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function tags(){
        return $this->hasMany('App\Tags');
    }
}
