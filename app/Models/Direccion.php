<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = "direcciones";
    
    use HasFactory;
    protected $fillable = ['calle', 'colonia', 'delegacion', 'codigo_postal', 'estado', 'ciudad'];
}
