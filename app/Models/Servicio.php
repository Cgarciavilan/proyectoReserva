<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
// Relación con el modelo User
public function user()
{
    return $this->belongsTo(User::class);
}
use HasFactory;

public function citas()
    {
        return $this->hasMany(Cita::class, 'codigo', 'codigo');
    }
}
