<?php

namespace App;

use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['categoria'];

    public function producto()
    {

        return $this->hasMany(Producto::class);
    }
}
