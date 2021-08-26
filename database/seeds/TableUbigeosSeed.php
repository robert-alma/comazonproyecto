<?php

use Illuminate\Database\Seeder;

class TableUbigeosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ubigeos = [
            [
                'pais' => 'Perú',
                'departamento' => 'Lima',
                'provincia' => 'Lima',
                'distrito' => 'Breña',
            ]
        ];

        foreach ($ubigeos as $valor){
            DB::table('ubigeos')->insert([
                'pais' => $valor['pais'],
                'departamento' => $valor['departamento'],
                'provincia' => $valor['provincia'],
                'distrito' => $valor['distrito'],
            ]);
        }
    }
}
