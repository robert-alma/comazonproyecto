<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableEjecutivosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $ejecutivos = [
            [
                'usuario_id' => 2,
            ],
        ];

        foreach ($ejecutivos as $valor){
            DB::table('ejecutivos')->insert([
                'usuario_id' => $valor['usuario_id'],
            ]);
        }
    }
}
