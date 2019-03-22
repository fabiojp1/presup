<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'codproducto',
        'producto',
        'descripcion',
        'costo',
        'stock',
        'stockminimo',
        'utilidades',
        'precio',
        'foto',
        'marca_id',
        'categoria_id',

    ];

    public function marca()
    {

        return $this->belongsTo('App\Marca', 'marca_id');
    }

    public function categoria()
    {

        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
}
