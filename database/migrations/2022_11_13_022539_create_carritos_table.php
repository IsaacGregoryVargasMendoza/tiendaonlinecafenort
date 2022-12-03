<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->integer('idProducto');
            $table->string('codigoProducto',);
            $table->string('nombreProducto',100);
            $table->string('unidadMedida',100);
            $table->double('cantidadProducto',9,2);
            $table->double('precioProducto',9,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
