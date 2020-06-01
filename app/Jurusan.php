<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table="jurusan";

    public function pengguna(){
        return $this->belongsTo('App\Pengguna');
    }
}
