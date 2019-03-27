<?php

namespace App;

use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['marca'];

    public function producto()
    {

        return $this->hasMany(Producto::class);
    }
}
