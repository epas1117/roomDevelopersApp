<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'secciones';
    protected $fillable = ['titulo', 'tutorial_id'];

    public function videos()
    {
        return $this->hasMany('Cinema\Video');
    }
  
}
