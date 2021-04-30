<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo', 250);
            $table->integer('cedula');
            $table->string('email', 120);
            $table->string('telefono', 120);
            $table->text('direccion');
            $table->decimal('porceComisionVenta', 18,2);
            $table->decimal('porceComisionCobro', 18,2);
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
        Schema::dropIfExists('_vendedores');
    }
}
