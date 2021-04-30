<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConexionesClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conexiones_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->date('fec_emis');
            $table->bigInteger('activo');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_tipo_cone')->unsigned();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_tipo_cone')->references('id')->on('tipos_conexiones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conexiones_cliente');
    }
}
