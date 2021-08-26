<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjecutivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejecutivos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')
            ->references('id')
            ->on('usuarios');
            $table->integer('valor_neto')->nullable();
            $table->integer('valor_anual')->nullable();
            $table->integer('valor_mensual')->nullable();
            $table->integer('valor_ejecutivo')->nullable();
            $table->integer('numero_cotizaciones_aceptadas')->nullable();
            $table->integer('numero_cotizaciones_enviadas')->nullable();
            $table->integer('numero_quejas')->nullable();
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
        Schema::dropIfExists('ejecutivos');
    }
}
