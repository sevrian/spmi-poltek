<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriteria";

    protected $fillable = ['kriteria'];


    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }
}
 