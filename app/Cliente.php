<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Cliente extends Model
{
    protected $fillable = [  
    'razonsocial',
    'documento',
    'telefono',
    'direccion',
    'email',
    'email',];
  }
