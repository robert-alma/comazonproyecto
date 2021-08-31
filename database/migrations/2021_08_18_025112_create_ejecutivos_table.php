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
            $table->string('valor_neto')->nullable();
            $table->string('valor_anual')->nullable();
            $table->string('valor_mensual')->nullable();
            $table->string('valor_ejecutivo')->nullable();
            $table->string('numero_cotizaciones_aceptadas')->nullable();
            $table->string('numero_cotizaciones_enviadas')->nullable();
            $table->string('numero_quejas')->nullable();
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
