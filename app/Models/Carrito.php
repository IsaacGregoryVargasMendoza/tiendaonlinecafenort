<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable=[
        'idProducto',
        'codigoProducto',
        'nombreProducto',
        'unidadMedida',
        'cantidadProducto',
        'precioProducto'
    ];
}
