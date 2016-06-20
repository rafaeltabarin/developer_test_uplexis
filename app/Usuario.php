<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
	protected $table = 'usuario';

    	protected $fillable = ['usuario', 'password'];

	protected $dates = ['deleted_at'];

	public function getUsuario($usuario){
        	$usuarios = self::all();
        	foreach ($usuarios as $key => $value) {
        		if($value->usuario == $usuario){
           	   return $value;
           	}
        	}
        	
		return false;
    	}

	public function sintegra()
	{
		return $this->hasMany('App\Sintegra');
	}
}
