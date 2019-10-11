<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
    protected $table="prestaciones";

    public function sede()
    {
        return $this->belongsTo('App\Models\Sede');
    }

    public function agenda()
    {
        return $this->hasMany('App\Models\Agenda');
    }
}
