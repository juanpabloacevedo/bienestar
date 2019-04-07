<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model{
    public function user(){
        return $this->belongsToMany("App\User","id_user");
    }
    public function espaciodeportivo(){
        return $this->belongsTo("App\EspacioDeportivo","id_espacio");
    }
    public function periodo(){
        return $this->belongsTo("App\Periodo","id_periodo");
    }
    
}
