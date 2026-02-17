<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jugador extends Model
{
    protected $table = 'jugadores'; 

    protected $guarded = [];

    public function equipo(): BelongsTo
    {
        return $this->belongsTo(Equipo::class);
    }
}