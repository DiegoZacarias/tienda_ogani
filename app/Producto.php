<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $guarded = [];
    public function categoria()
    {
    		return $this->belongsTo(Categoria::class);
    }

    public function marca()
    {
    		return $this->belongsTo(Marca::class);
    }

    public function etiquetas()
    {
    		return $this->belongsToMany(Etiqueta::class);
    }

    public function user()
    {
            return $this->belongsTo(User::class);
    }
}
