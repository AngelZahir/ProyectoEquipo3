<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Receta extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    protected $fillable = ['pacienteId', 'padecimineto', 'medicamento', 'fecha_inicio_tratamiento'];

    public static function resolveId()
    {
        return Auth::check() ? Auth::user() -> getAuthIdentifier():null;
    }
}
