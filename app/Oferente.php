<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferente extends Model
{
  protected $table = 'oferentes';
  //
  protected $fillable = [
    'persona', 'rol',
  ];
}
