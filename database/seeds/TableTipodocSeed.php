<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableTipodocSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipodoc = [
            'DNI',
            'Carnet',
            'Pasaporte'
        ];

        foreach ($tipodoc as $valor){
            DB::table('tipo_documento')->insert([
                'tipo' => $valor
            ]);
        }
    }
}
