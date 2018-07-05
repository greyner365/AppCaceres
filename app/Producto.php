<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = "productos";
    protected $fillable = ['nombre','descripcion','precio','existencia','id_categoria'];

    public function procategoria()
    {
      return $this->belongsTo('App\Categoria','id_categoria', 'id');
    }

}
