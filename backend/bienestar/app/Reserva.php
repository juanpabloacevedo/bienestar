<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function clase(){
        return $this->belongsTo("App\Clase","id_clase");
    }
    public function espacio(){
        return $this->belongsTo("App\Espacio","id_espacio");
    }
    public function estado(){
        return $this->belongsTo("App\Estado","id_estado");
    }
    public function user(){
        return $this->belongsToMany("App\Asistencia","id_user");
    }
}
