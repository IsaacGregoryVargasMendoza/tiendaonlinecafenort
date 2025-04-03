<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudWeb extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_solicitud_web';
    protected $table = 'solicitud_web';

    protected $fillable = [
        'nombre',
        'email',
        'servicio',
        'mensaje',
    ];
}
