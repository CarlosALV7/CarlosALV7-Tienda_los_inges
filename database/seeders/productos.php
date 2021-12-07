<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'id' => 1,
                'producto' => 'Sabritas',
                'existencias' => 22,
                'precio_unitario' => 16.00,
                'fotografia' => '1.jpg',
                'descripcion' => 'Frituras',
                'estatus' => 'Activo',
                'proveedor_id' => 1
            ],
            [
                'id' => 2,
                'producto' => 'Sabritas',
                'existencias' => 28,
                'precio_unitario' => 11.00,
                'fotografia' => '2.jpg',
                'descripcion' => 'Frituras',
                'estatus' => 'Activo',
                'proveedor_id' => 1
            ],
            [
                'id' => 3,
                'producto' => 'Sabritas',
                'existencias' => '23',
                'precio_unitario' => '16.00',
                'fotografia' => '3.jpg',
                'descripcion' => 'Frituras',
                'estatus' => 'Activo',
                'proveedor_id' => 1
            ],
            [
                'id' => 4,
                'producto' => 'Sabritas',
                'existencias' => '28',
                'precio_unitario' => '11.00',
                'fotografia' => '4.jpg',
                'descripcion' => 'Frituras',
                'estatus' => 'Activo',
                'proveedor_id' => 1
            ]
        ]);
    }
}
