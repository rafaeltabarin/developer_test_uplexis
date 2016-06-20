<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sintegra extends Model
{
	protected $table = 'sintegra';

	protected $fillable = ['idusuario', 'cnpj', 'resultado_json'];
	
	protected $dates = ['deleted_at'];

	function usuario(){
		return $this->belongsTo('App\Usuario');
	}
}
