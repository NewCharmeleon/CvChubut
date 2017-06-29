<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
	 protected $fillable = [
        'nombre', 'dni', 'fechanac','nacionalidad', 'direccion', 'ciudad', 'telefono'
    ];
	  
	  
  }
  public static function form(){
	  return ['nombre' => '', 'dni' => 0, 'fechanac' => '','nacionalidad' => '', 'direccion' => '', 'ciudad' => '', 'telefono' => ''];
	}
}
