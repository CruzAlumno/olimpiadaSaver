<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olimpiada extends Model
{
    use HasFactory;

    protected $table = 'olimpiadas';

    public function equipos(){
        return $this->belongsToMany(Equipo::class,'equiposolimpiadas', 'id_olimpiada', 'id_equipo');
    }
}
