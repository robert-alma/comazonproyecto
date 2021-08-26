<?php

use Illuminate\Database\Seeder;

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
