<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model{
    public function users(){
        return $this->belongsToMany("App\User","clase_usuarios", "id_clase", "id_user")
        ->withTimestamps();
    }
    public function espaciodeportivo(){
        return $this->belongsTo("App\EspacioDeportivo","id_espacio");
    }
    public function periodo(){
        return $this->belongsTo("App\Periodo","id_periodo");
    }
    
}
