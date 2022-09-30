<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public $timestamps =false;

    public function comprobante(){
        return $this->belongsTo(Comprobante::class,'idComprobante');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class,'idCliente');
    }

    public function productos(){
        return $this->belongsToMany(Producto::class,'idProducto');
    }
}
