<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    //
    protected $fillable = ['seccionA', 'seccionB', 'seccionC', 'seccionD', 'seccionE', 'seccionF'];
    protected $table = 'secciones';
}
