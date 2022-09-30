<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('dniCliente',20);
            $table->string('nombreCliente',200);
            $table->string('direccionCliente',300);
            $table->string('celularCliente',200);
            $table->string('correoCliente',200);
            $table->boolean('estadoCliente');
            $table->foreignid('idUsuario')
                ->nullable()
                ->contrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
