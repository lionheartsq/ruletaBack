<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    //
    protected $table = 'salas';

    protected $fillable = ['capacidadSala','tipoJuego','nPuntaje','nTurnos','urlRandom','idMod','estado'];

    public $timestamps = false;
}
