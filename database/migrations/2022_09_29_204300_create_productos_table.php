<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto',100);
            $table->double('stockProducto',9,2);
            $table->double('precioProducto',9,2);
            $table->string('unidadMedida',100);
            $table->string('imagenProducto');
            $table->boolean('visibleProducto');
            $table->boolean('estadoProducto');
            $table->foreignid('idTipoProducto')
                ->nullable()
                ->contrained('categorias')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
