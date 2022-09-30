<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;
    public $timestamps =false;

    public function ventas(){
        return $this->hasMany(Venta::class,'id');
    }
}
