<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')
            ->references('id')
            ->on('usuarios');
            $table->foreignId('ubigeo_id')
            ->references('id')
            ->on('ubigeos')
            ->nullOnDelete();////////////////////NO SE QUE HACER ACÁ
            $table->foreignId('sexo_id')
            ->references('id')
            ->on('sexos');
            $table->foreignId('tipo_documento_id')
            ->references('id')
            ->on('tipo_documento');
            $table->string('documento');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->dateTime('fecha_nacimiento');
            $table->string('direccion');
            $table->string('celular');
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
        Schema::dropIfExists('datos');
    }
}
