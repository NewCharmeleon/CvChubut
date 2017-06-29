<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
  //use Notifiable;
  protected $table = 'actividades';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nombre', 'descripcion',
  ];
  public static function form(){
	  return [];
	  
	  
  }
}
