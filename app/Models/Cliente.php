<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'dniCliente',
        'nombreCliente',
        'direccionCliente',
        'celularCliente',
        'correoCliente',
        'estadoCliente',
        'idUsuario'
    ];

    public function ventas(){
        return $this->hasMany(Venta::class,'id');
    }
}
