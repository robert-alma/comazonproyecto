<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TablePerfilesSeed::class);
        $this->call(TableUsuariosSeed::class);
        $this->call(TablePagosSeed::class);
        $this->call(TableEmpresasSeed::class);
        $this->call(TableServiciosSeed::class);
        $this->call(TableSexosSeed::class);
        $this->call(TableTipodocSeed::class);
        $this->call(TableUbigeosSeed::class);

    }
}
