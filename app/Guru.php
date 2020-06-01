<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Guru extends Model
{
    use softDeletes;
    protected $table="guru";
    protected $fillable=['nama','umur'];
    protected $dates=['deleted_at'];
}
