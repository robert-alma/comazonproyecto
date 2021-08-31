<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('usuario_id')
            ->references('id')
            ->on('usuarios');
            $table->foreignId('empresa_id')
            ->references('id')
            ->on('empresas');
            $table->foreignId('pago_id')
            ->references('id')
            ->on('pagos');
            $table->string('valor_neto')->nullable();
            $table->string('valor_anual')->nullable();
            $table->string('valor_mensual')->nullable();
            $table->string('valor_cliente')->nullable();
            $table->string('numero_cotizaciones_aceptadas')->nullable();
            $table->string('satisfaccion')->nullable();
            $table->string('numero_referidos')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
