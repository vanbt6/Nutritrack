<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'correo',
        'contrasena', 
        'rol',
    ];
    
    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    // Relaciones
    public function nutriologo() {
        return $this->hasOne(Nutriologo::class, 'usuario_id');
    }

    public function paciente() {
        return $this->hasOne(Paciente::class, 'usuario_id');
    }

    public function mensajesEnviados() {
        return $this->hasMany(Mensaje::class, 'emisor_id');
    }

    public function mensajesRecibidos() {
        return $this->hasMany(Mensaje::class, 'receptor_id');
    }

    protected $hidden = [
        'contrasena', // Ocultamos el nuevo nombre del campo
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'contrasena' => 'hashed', // Laravel encriptará automáticamente
        ];
    }
}