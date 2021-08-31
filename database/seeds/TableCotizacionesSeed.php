<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableCotizacionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $cotizaciones = [
            [
                'cliente_id'=>1,
                'ejecutivo_id' => 1,
                'empresa_id' => 1,
                'servicio_id' => 1,
                'fl_estado' => 'Enviado',
                'cantidad'=>'cantidad cotizacion1',
                'precio'=>'preciocotizacion1',
                'descuento'=>'descuentocotizacion1',
                'total'=>'totalcotizacion1',
                'foto'=>'fotocotizcion1',
            ],
            [
                'cliente_id'=>1,
                'ejecutivo_id' => 1,
                'empresa_id' => 1,
                'servicio_id' => 1,
                'fl_estado' => 'Enviado',
                'cantidad'=>'cantidad cotizacion2',
                'precio'=>'preciocotizacion2',
                'descuento'=>'descuentocotizacion2',
                'total'=>'totalcotizacion2',
                'foto'=>'fotocotizcion2',
            ],
            [
                'cliente_id'=>1,
                'ejecutivo_id' => 1,
                'empresa_id' => 1,
                'servicio_id' => 1,
                'fl_estado' => 'Enviado',
                'cantidad'=>'cantidad cotizacion3',
                'precio'=>'preciocotizacion3',
                'descuento'=>'descuentocotizacion3',
                'total'=>'totalcotizacion3',
                'foto'=>'fotocotizcion3',
            ],
        ];

        foreach ($cotizaciones as $valor){
            DB::table('cotizaciones')->insert([
                'cliente_id'=>$valor['cliente_id'],
                'ejecutivo_id' => $valor['ejecutivo_id'],
                'empresa_id' => $valor['empresa_id'],
                'servicio_id' => $valor['servicio_id'],
                'fl_estado' => $valor['fl_estado'],
                'cantidad' => $valor['cantidad'],
                'precio' => $valor['precio'],
                'descuento'=>$valor['descuento'],
                'total'=>$valor['total'],
                'foto'=>$valor['foto'],
            ]);
        }
    }
}
