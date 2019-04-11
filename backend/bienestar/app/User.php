<?php
namespace App;
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
        return $this->belongsTo("App\Rol","id_rol");
    }
    public function clase(){
        return $this->belongsToMany("App\Clase","id_clase");
    }
    public function documento(){
        return $this->belongsTo("App\TipoDocumento","id_doc");
    }
    public function asistencias(){
        return $this->belongsTo("App\Asistencia","id_asistencia");
    }
    
	}


