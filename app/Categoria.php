<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function productos()
    {
    		return $this->hasMany(Producto::class);
    }

    public function user()
    {
    		return $this->belongsTo(User::class);
    }
}
