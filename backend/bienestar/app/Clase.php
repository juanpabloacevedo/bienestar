<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model{
    public function user(){
        return $this->belongsToMany("App\User","id_user");
    }
    public function espacio_deportivo(){
        return $this->belongsTo("App\Clase","id_clase");
    }
    
}
