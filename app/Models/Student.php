<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // ESTO ES LO QUE DEBES AGREGAR AQUÍ:
    protected $fillable = ['first_name','last_name', 'picture', 'description'];
}
