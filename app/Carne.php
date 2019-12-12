<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carne extends Model
{
    //
    protected $fillable = ['nombre', 'seccion', 'cantidad'];
    protected $table = 'carnes';
}
