<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoPropuesta extends Model
{
    use HasFactory;
    protected $table='estadopropuestas';

    public function equipo()
    {
        return $this->hasMany('App\Models\Propuestas');
    }
}