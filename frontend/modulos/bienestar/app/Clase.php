<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model{

    public function users(){
        /** tabla objetivo, tabla auxiliar,id propio, id del objetivo dentro de la tabla objetivo*/
        return $this->belongsToMany("App\User","clase_usuarios", "id_clase", "id_user")
        ->withTimestamps();
    }
    public function espacio(){
        return $this->belongsTo("App\Espacio","id_espacio");
    }

    public function espaciodeportivo(){
        return $this->belongsTo("App\EspacioDeportivo","id_espacio");
    }


    public function periodo(){
        return $this->belongsTo("App\Periodo","id_periodo");
    }
    
}
