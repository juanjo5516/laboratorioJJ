<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    // use HasFactory;

    protected $table = 'forma_pagos';

    protected $fillable = ['name'];

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
