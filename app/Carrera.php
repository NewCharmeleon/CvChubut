<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
   protected $fillable = [
        'name', 'descripcion'
    ];
 
	//metodo static con valores por defecto para crear
	public static function form(){
	  return ['name' => '', 'descripcion' => ''];
	}
	
}
