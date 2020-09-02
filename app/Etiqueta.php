<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    public function productos()
    {
    		return $this->belongsToMany(Producto::class);
    }
}
