<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSexosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexos = [
            'Hombre',
            'Mujer'
        ];

        foreach ($sexos as $valor){
            DB::table('sexos')->insert([
                'sexo' => $valor
            ]);
        }
    }
}
