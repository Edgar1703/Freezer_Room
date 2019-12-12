<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Temperatura extends Model
{
    //
     protected $fillable = ['fecha', 'hora', 'seccion','temperatura'];
     
}
