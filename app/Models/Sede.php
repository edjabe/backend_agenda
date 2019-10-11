<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sede extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public function prestacion()
    {
        return $this->hasMany('App\Models\Prestacion');
    }
}
