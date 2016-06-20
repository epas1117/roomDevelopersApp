<?php

namespace Cinema;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cinema\Tutorial;
use Auth;

class User extends Authenticatable
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function setPasswordAttribute($valor)
    {
        if (!empty($valor)) {
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function videos()
    {
        return $this->belongsToMany('Cinema\Video')->withPivot('tiempo', 'completado');
    }

    public function porcentaje($tutorial_id)
    {
        $tutorial = Tutorial::find($tutorial_id);
        $tiempo = 0;
        foreach ($tutorial->secciones as $seccion) {
            foreach ($seccion->videos as $video) {
                if ($this->contiene($video, Auth::user()->videos) == true) {
                    $tiempo += $video->duracion;
                }
            }
        }
        return ($tiempo * 100) / $this->tiempoVideosPorTutorial($tutorial_id);
    }

    public function tiempoVideosPorTutorial($tutorial_id)
    {
        $tutorial = Tutorial::find($tutorial_id);
        $tiempo = 0;
        foreach ($tutorial->secciones as $seccion) {
            foreach ($seccion->videos as $video) {
                $tiempo += $video->duracion;
            }
        }
        return $tiempo;
    }

    public function contiene($videoEncontrar, $videos)
    {
        foreach ($videos as $video) {
            if ($video->id == $videoEncontrar->id) {
                return true;
            }
        }
        return false;
    }
}
