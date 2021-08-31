<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableServiciosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios = [
            'Diseño Web',
            'Landing Page',
            'Back-End',
            'Front-End'
        ];

        foreach ($servicios as $valor){
            DB::table('servicios')->insert([
                'servicio' => $valor
            ]);
        }
    }
}
