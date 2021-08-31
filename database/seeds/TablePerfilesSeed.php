<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablePerfilesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perfiles = [
            'Cliente',
            'Ejecutivo'
        ];

        foreach ($perfiles as $valor){
            DB::table('perfiles')->insert([
                'perfil' => $valor
            ]);
        }
    }
}
