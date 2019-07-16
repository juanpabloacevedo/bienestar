<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    public function sede(){
        return $this->belongsTo("App\Sede","id_sede");
    }
}
