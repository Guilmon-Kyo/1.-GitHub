<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propuesta extends Model
{
    use HasFactory,softDeletes;
    protected $table = 'propuestas';

    public function estadopropuestas(){
        return $this->belongsTo('App\Models\EstadoPropuesta');
    }
}