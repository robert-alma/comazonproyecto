<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableClientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $clientes = [
            [
                'usuario_id' => 1,
                'empresa_id' => 1,
                'pago_id' => 1,
            ],

        ];

        foreach ($clientes as $valor){
            DB::table('clientes')->insert([
                'usuario_id' => $valor['usuario_id'],
                'empresa_id' => $valor['empresa_id'],
                'pago_id' => $valor['pago_id'],
            ]);
        }
    }
}
