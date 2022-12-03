<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable=[
        'nombreProducto',
        'precioProducto',
        'cantidadProducto',
        'idVenta',
        'idProducto'
    ];
}
