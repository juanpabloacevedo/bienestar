<?php

namespace gimnasioVirtual;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{
    /**Se crea la interfas */
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**alias rol, objeto que mapea la relacion */
    public function rol(){
        return $this->belongsTo("gimnasioVirtual\Rol","id_rol");
    }
    public function documento(){
        return $this->belongsTo("gimnasioVirtual\TipoDocumento","id_doc");
    }


}
