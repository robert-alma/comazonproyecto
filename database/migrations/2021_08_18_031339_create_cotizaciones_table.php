<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')
            ->references('id')
            ->on('clientes');
            $table->foreignId('ejecutivo_id')
            ->references('id')
            ->on('ejecutivos');
            $table->foreignId('empresa_id')
            ->references('id')
            ->on('empresas');
            $table->foreignId('servicio_id')
            ->references('id')
            ->on('servicios');
            $table->string('fl_estado');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('descuento');
            $table->integer('total');
            $table->string('foto');
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
        Schema::dropIfExists('cotizaciones');
    }
}
