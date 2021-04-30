<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo', 50);
            $table->string('razon_social', 250);
            $table->string('rif', 40);
            $table->text('direccion_fiscal');
            $table->text('direccion_entrega');
            $table->string('email', 250)->unique();
            $table->string('telefono', 250);
            $table->boolean('inactivo');
            $table->boolean('agente_retencion');
            $table->decimal('porc_dec_global', 18,2);
            $table->integer('id_zona')->unsigned();
            $table->integer('id_tipo_cliente')->unsigned();
            $table->integer('id_segmento')->unsigned();
            $table->integer('id_vendedor')->unsigned();
            $table->integer('id_condicionDePago')->unsigned();
            $table->timestamps();
            $table->foreign('id_zona')->references('id')->on('zonas');
            $table->foreign('id_tipo_cliente')->references('id')->on('tipos_clientes');
            $table->foreign('id_segmento')->references('id')->on('segmentos');
            $table->foreign('id_vendedor')->references('id')->on('vendedores');
            $table->foreign('id_condicionDePago')->references('id')->on('Condiciones_de_pagos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
