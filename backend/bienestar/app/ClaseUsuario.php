<?php

namespace gimnasioVirtual;

use Illuminate\Database\Eloquent\Model;

class Clases_usuario extends Model
{
    protected $table='clases_usuarios';
    protected $PrimaryKey='id_clase';  






    
    public $timestamps=false; // indicacion para que no generere las 2 columnas automatica de registro de actualizacion
    protected $fillable=[
        'id_espacio_dep','cupos',
    ];
}
