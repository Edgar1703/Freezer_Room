<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    //
    protected $fillable = ['nombre', 'seccion','cantidad'];
    protected $table = 'frutas';
}

