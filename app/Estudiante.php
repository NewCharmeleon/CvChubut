<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  protected $table = 'estudiantes';
  //
  protected $fillable = [
    'persona', 'rol','carrera'
  ];
  public static function form(){
	  return ['persona' => '', 'rol' => '','carrera'=> ''];

  public function carreras(){
    	return $this->belongsTo('App\Carrera');
  	}
    public function personas() {
        return $this->hasOne('Persona::class');
  }

  }
}
