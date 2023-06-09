<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Propuesta extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'propuestas';

    public function estadoPropuesta()
    {
        return $this->belongsTo('App\Models\EstadoPropuesta');
    }
}
