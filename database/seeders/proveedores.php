<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class proveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            [
                'id' => 1,
                'proveedor' => 'Sabritas',
                'dias_semana' => 2,
                'telefono' => '7298756313',
                'direcciones_id'=>1
            ],
            [
                'id' => 2,
                'proveedor' => 'Alpura',
                'dias_semana' => 2,
                'telefono' => '7298756313',
                'direcciones_id'=>2
            ],
            [
                'id' => 3,
                'proveedor' => 'Coca Cola',
                'dias_semana' => 3,
                'telefono' => '7298756313',
                'direcciones_id'=>2
            ],
            [
                'id' => 4,
                'proveedor' => 'Barcel',
                'dias_semana' =>2,
                'telefono' => '7298756313',
                'direcciones_id'=>1
            ],
            [
                'id' => 5,
                'proveedor' => 'Grupo Corona',
                'dias_semana' => 1,
                'telefono' => '7298756313',
                'direcciones_id'=>2
            ]
        ]);
    }
}
