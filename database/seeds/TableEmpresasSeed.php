<?php

use Illuminate\Database\Seeder;

class TableEmpresasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $empresas = [
            'Comazon',
            'Linio',
            'Telefonica'
        ];

        foreach ($empresas as $valor){
            DB::table('empresas')->insert([
                'empresa' => $valor
            ]);
        }
    }

}
