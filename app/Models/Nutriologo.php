<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutriologo extends Model
{
    // Nombre de la tabla 
    protected $table = 'nutriologos';

    protected $primaryKey = 'usuario_id';
    public $incrementing = false; // Ya que viene del ID de User

    protected $fillable = [
        'usuario_id', 
        'cedulaProfesional', 
        'especialidad',
        'foto_url'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function pacientes() {
        return $this->hasMany(Paciente::class, 'nutriologo_id', 'usuario_id');
    }

    public function dietasPrescritas() {
        return $this->hasMany(Dieta::class, 'nutriologo_id', 'usuario_id');
    }
}
