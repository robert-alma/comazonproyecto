<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableDatosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $datos = [
            [
                'usuario_id' => 1,
                'ubigeo_id' => 1,
                'sexo_id' => 1,
                'tipo_documento_id' => 1,
                'documento' => '111111111',
                'nombre'=>'clientenombre',
                'apellido_paterno'=>'clientepaterno',
                'apellido_materno'=>'clientematerno',
                'fecha_nacimiento'=>\Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
                'direccion'=>'clientedireccion',
                'celular'=>'11111',
            ],
            [
                'usuario_id' => 2,
                'ubigeo_id' => 1,
                'sexo_id' => 2,
                'tipo_documento_id' => 2,
                'documento' => '222222222',
                'nombre'=>'ejecutivonombre',
                'apellido_paterno'=>'ejecutivopaterno',
                'apellido_materno'=>'ejecutivomaterno',
                'fecha_nacimiento'=>\Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
                'direccion'=>'ejecutivodireccion',
                'celular'=>'22222',
            ]
        ];

        foreach ($datos as $valor){
            DB::table('datos')->insert([
                'usuario_id' => $valor['usuario_id'],
                'ubigeo_id' => $valor['ubigeo_id'],
                'sexo_id' => $valor['sexo_id'],
                'tipo_documento_id' => $valor['tipo_documento_id'],
                'documento' => $valor['documento'],
                'nombre'=>$valor['nombre'],
                'apellido_paterno'=>$valor['apellido_paterno'],
                'apellido_materno'=>$valor['apellido_materno'],
                'fecha_nacimiento'=>$valor['fecha_nacimiento'],
                'direccion'=>$valor['direccion'],
                'celular'=>$valor['celular'],
            ]);
        }
    }
}
