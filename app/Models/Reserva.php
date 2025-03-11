<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = ['viaje_id', 'nombre', 'email', 'telefono', 'personas', 'anticipo'];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }
}
