<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'idMenu';

    protected $fillable = [
        'dieta_id',
        'desayuno',
        'comida',
        'cena',
        'snacks',
    ];

    public function dieta() {
        return $this->belongsTo(Dieta::class, 'dieta_id', 'idDieta');
    }
}
