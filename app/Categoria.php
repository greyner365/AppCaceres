<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = "categorias";
	protected $fillable = ['categoria','descripcion'];


	public function producto()
    {
        return $this->hasMany('App\Producto');
    }
}
