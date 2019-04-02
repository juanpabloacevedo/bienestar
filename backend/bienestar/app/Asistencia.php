<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public function user(){
        return $this->belongsTo("App\User","id_user");
    }
    public function clase(){
        return $this->belongsTo("App\Clase","id_clase");
    }
}
