<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSolicitudesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $solicitudes = [
            [
                'cliente_id' => 1,
                'asunto' => 'Asunto de Solicitud 1',
                'comentario' => 'Comentario de Solicitud 1',
                'presupuesto' => 'Presupuesto de solicitud 1',
                'fecha_entrega' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
            ],
            [
                'cliente_id' => 1,
                'asunto' => 'Asunto de Solicitud 2',
                'comentario' => 'Comentario de Solicitud 2',
                'presupuesto' => 'Presupuesto de solicitud 2',
                'fecha_entrega' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
            ],
            [
                'cliente_id' => 1,
                'asunto' => 'Asunto de Solicitud 3',
                'comentario' => 'Comentario de Solicitud 3',
                'presupuesto' => 'Presupuesto de solicitud 3',
                'fecha_entrega' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
            ],
        ];

        foreach ($solicitudes as $valor){
            DB::table('solicitudes')->insert([
                'cliente_id' => $valor['cliente_id'],
                'asunto' => $valor['asunto'],
                'comentario' => $valor['comentario'],
                'presupuesto' => $valor['presupuesto'],
                'fecha_entrega' => $valor['fecha_entrega'],
            ]);
        }
    }
}
