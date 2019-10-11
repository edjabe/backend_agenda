<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{

    public function prestacion()
    {
        return $this->belongsTo('App\Models\Prestacion');
    }
}
