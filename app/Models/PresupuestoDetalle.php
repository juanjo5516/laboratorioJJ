<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresupuestoDetalle extends Model
{
    // use HasFactory;

    protected $table = 'presupuesto_detalle';

    protected $fillable = [
        'mes',
        'monto',
        'presupuesto_id'
    ];
}
