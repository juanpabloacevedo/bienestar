<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspacioDeportivo extends Model
{
    public function user(){
        return $this->belongsTo("App\User","id_user");
    }
}
