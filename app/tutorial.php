<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutoriales';
    protected $fillable = ['titulo', 'descripcion', 'autor', 'imagen', 'categoria_id'];

}
