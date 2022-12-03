<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable=[
        'descripcionTipoProducto',
        'estadoTipoProducto'
    ];

    public function productos(){
        return $this->hasMany(Producto::class,'id');
    }
}
