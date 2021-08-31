<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableUsuariosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            [
                'perfil_id' => 1,
                'usuario' => 'cliente',
                'password' => bcrypt('secret'),
                'correo' => 'cliente@dominio.com',
                'flestado' => TRUE,
            ],
            [
                'perfil_id' => 2,
                'usuario' => 'ejecutivo',
                'password' => bcrypt('secret'),
                'correo' => 'ejecutivo@dominio.com',
                'flestado' => TRUE,
            ]
        ];

        foreach ($usuarios as $valor){
            DB::table('usuarios')->insert([
                'perfil_id' => $valor['perfil_id'],
                'usuario' => $valor['usuario'],
                'password' => $valor['password'],
                'correo' => $valor['correo'],
                'flestado' => $valor['flestado'],
            ]);
        }
    }
}
