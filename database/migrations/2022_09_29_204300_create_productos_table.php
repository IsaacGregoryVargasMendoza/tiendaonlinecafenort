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
            $table->string('codigoProducto',10);
            $table->string('nombreProducto',100);
            $table->text('descripcionProducto')->nullable();
            $table->double('stockProducto',9,2)->nullable()->default(0);
            $table->double('precioProducto',9,2)->nullable()->default(0);
            $table->string('unidadMedida',100);
            $table->string('imagenProducto')->nullable()->default('');
            $table->double('descuentoProducto')->nullable()->default(0);
            $table->boolean('visibleProducto')->nullable()->default(1);
            $table->boolean('estadoProducto')->nullable()->default(1);
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
