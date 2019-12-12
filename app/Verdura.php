<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verdura extends Model
{
    //
     protected $fillable = ['nombre', 'seccion', 'cantidad'];
     protected $table = 'verduras';
}
