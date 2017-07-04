<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\actividadTipo;
use App\actividadEspecifica;


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
/*  foreach ($ActividadTipo->nombre as $nombreTipoAct) {
    $nombreTipoAct=
  }
  $this->nombreTipoAct='App\ActividadTipo'->'nombre';
  $this->nombreActEspecifica='App\ActividadEspecifica'->'nombre';
  */public static function form(){
    return ['nombre_tipo_act' => $ActividadTipo->nombre ,'descripcion' =>'',
    'nombre_act_especifica' => $ActividadEspecifica->nombre];



  }
}
