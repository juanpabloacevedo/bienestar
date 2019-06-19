<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

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
	public function clases(){
		/** tabla objetivo, tabla auxiliar,id propio, id del objetivo dentro de la tabla objetivo*/
		return $this->belongsToMany("App\Clase","clase_usuarios", "id_user", "id_clase")
		->withTimestamps();
	}
	public function documento(){
		return $this->belongsTo("App\TipoDocumento","id_doc");
	}
	public function reservas(){
		/** tabla objetivo, tabla auxiliar,id propio, id del objetivo dentro de la tabla objetivo*/
		return $this->belongsToMany("App\Reserva","asistencias", "id_user", "id_reserva")
		->withTimestamps();
	}

	public function asistencia(){
		return $this->hasMany("asistencias", "id_user")
		->withTimestamps();
	}

	public function isAdmin(){
		$user=Auth::user();
		if ($user!=null) {
			if ($user->id_rol==1) {
				return true;
			}
		}
		return false;
	}

	public function isUser(){
		$user=Auth::user();
		if ($user!=null) {
			if ($user->id_rol==3||$user->id_rol==2) {
				return true;
			}
		}
		return false;
	}

	public function isInstructor(){
		$user=Auth::user();
		if ($user!=null) {
			if ($user->id_rol==2) {
				return true;
			}
		}
		return false;  
	}
}


