<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    public function miembros()
    {
        return $this->belongsToMany(Participante::class,'participantesequipos', 'id_equipo', 'id_participante' );
    }
}
