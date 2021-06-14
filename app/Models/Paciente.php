<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
    protected $fillable = ['medicoId', 'direccionId', 'nombre', 'ap_paterno', 'ap_materno', 'edad'];

    public static function resolveId()
    {
        return Auth::check() ? Auth::user() -> getAuthIdentifier():null;
    }

}
