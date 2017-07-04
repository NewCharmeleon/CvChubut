<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait; // add this trait to your user model
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	//metodo static con valores por defecto para crear
	public static function form(){

	  return ['name' => '', 'display_name' => '','email' => '', 'password' =>'123456', ];
	}
	function setPasswordAttribute($value){
		$this->attributes['password'] = \Hash::make($value);//en base 64

	}
  public function roles(){
      return $this->belongsTo('App\Role','display_name');
  }
  public function personas() {
      return $this->hasOne('Persona::class');
    }

}
