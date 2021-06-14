<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Medico extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
    
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'cedula'];
    

    public static function resolveId()
    {
        return Auth::check() ? Auth::user() -> getAuthIdentifier():null;
    }


}
