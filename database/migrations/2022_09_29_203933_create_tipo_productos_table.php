<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoProductosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_productos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcionTipoProducto',100);
            $table->boolean('estadoTipoProducto')->nullable()->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_productos');
    }
}
