<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $guarded = [];

    public function productos()
    {
    		return $this->hasMany(Producto::class);
    }

    public function user()
    {
    		return $this->belongsToMany(User::class);
    }
}
