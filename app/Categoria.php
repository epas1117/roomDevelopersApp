<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    protected $table='categorias';
    protected $fillable=['tipo'];
}
