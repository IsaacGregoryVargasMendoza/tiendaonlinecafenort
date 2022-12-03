<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Sanctum\Contracts\HasApiTokens;

class Producto extends Model
{
    //use HasFactory, HasApiTokens;
    use HasFactory;

    public $timestamps = false;

    protected $fillable=[
        'codigoProducto',
        'nombreProducto',
        'descripcionProducto',
        'stockProducto',
        'precioProducto',
        'unidadMedida',
        'imagenProducto',
        'descuentoProducto',
        'visibleProducto',
        'estadoProducto',
        'idTipoProducto'
    ];
    
    public function ventas(){
        return $this->belongsToMany(Venta::class,'idVenta');
    }

    public function tipoproducto(){
        return $this->belongsTo(TipoProducto::class,'idTipoProducto');
    }
}
