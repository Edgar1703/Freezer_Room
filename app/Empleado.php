<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
     protected $fillable = ['nombre', 'apellido', 'id_empleado','zona_id'];
}

