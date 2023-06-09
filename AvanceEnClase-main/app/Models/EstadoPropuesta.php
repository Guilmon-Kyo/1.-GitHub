<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPropuesta extends Model
{
    use HasFactory;
    protected $table='estadopropuestas';

    public function equipo(){
        return $this->hasMany('App\Models\Propuestas');
    }
}