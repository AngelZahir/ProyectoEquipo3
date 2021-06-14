<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Paciente extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    protected $fillable = ['medicoId', 'direccionId', 'nombre', 'ap_paterno', 'ap_materno', 'edad'];

    public static function resolveId()
    {
        return Auth::check() ? Auth::user() -> getAuthIdentifier():null;
    }

}
