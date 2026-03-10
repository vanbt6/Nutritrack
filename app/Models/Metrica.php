<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metrica extends Model
{
    protected $table = 'metricas';
    protected $primaryKey = 'idMetrica';

    protected $fillable = [
        'paciente_id',
        'fecha',
        'peso',
        'grasaCorporal',
        'imc',
    ];

    public function paciente() {
        return $this->belongsTo(Paciente::class, 'paciente_id', 'usuario_id');
    }
}
