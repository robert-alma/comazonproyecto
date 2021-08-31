<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablePagosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pagos = [
            'BBVA',
            'BCP',
            'BN'
        ];

        foreach ($pagos as $valor){
            DB::table('pagos')->insert([
                'pago' => $valor
            ]);
        }
    }
}
