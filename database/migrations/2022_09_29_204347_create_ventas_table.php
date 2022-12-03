<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaVenta');
            $table->string('identificadorCliente',30);
            $table->string('denominacionCliente',200);
            $table->string('direccionCliente',200);
            $table->string('serieVenta',50);
            $table->string('numeroSerieVenta',50);
            $table->double('totalVenta',9,2);
            $table->boolean('estadoVenta');
            $table->foreignid('idComprobante')
                ->nullable()
                ->contrained('comprobantes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignid('idCliente')
                ->nullable()
                ->contrained('clientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
