<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ventas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   DB::table('ventas')->insert([
        ['Monto'=>'50.55',
        'iva'=>'8.08',
        'total'=>'58.63',
        'rol'=>'Empleado',
        'nombre_producto'=>'Pomada',
        'cantidad'=>'1',
        'costo'=>'45.50'
       ],
        ['Monto'=>'50.55',
        'iva'=>'8.08',
        'total'=>'58.63',
        'rol'=>'Empleado',
        'nombre_producto'=>'Leche Alpura',
        'cantidad'=>'3',
        'costo'=>'45.50'
    ],
        ['Monto'=>'50.55',
        'iva'=>'8.08',
        'total'=>'58.63',
        'rol'=>'Empleado',
        'nombre_producto'=>'Coca Cola 600ml',
        'cantidad'=>'4',
        'costo'=>'45.50'
],
        ['Monto'=>'50.55',
        'iva'=>'8.08',
        'total'=>'58.63',
        'rol'=>'Empleado',
        'nombre_producto'=>'Bolsa de dulces',
        'cantidad'=>'2',
        'costo'=>'45.50'
        ]
       ]);
    }
}