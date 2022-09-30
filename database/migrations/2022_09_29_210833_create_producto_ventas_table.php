<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoVentasTable extends Migration
{
    public function up()
    {
        Schema::create('producto_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto',200);
            $table->double('precioProducto',9,2);
            $table->double('cantidadProducto',9,2);
            $table->foreignid('idVenta')
                ->nullable()
                ->contrained('ventas')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignid('idProducto')
                ->nullable()
                ->contrained('productos')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('producto_ventas');
    }
}
