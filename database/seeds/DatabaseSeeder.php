<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        $this->call(TableDatosSeed::class);
        $this->call(TableClientesSeed::class);
        $this->call(TableEjecutivosSeed::class);
        $this->call(TableSolicitudesSeed::class);
        $this->call(TableCotizacionesSeed::class);
    }
}
