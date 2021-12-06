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
        ['Proveedor'=>'Sabritas',
        'dias_semana_visita'=>'Martes-Jueves',
        'Telefono'=>'7298756313'
       ],
        ['Proveedor'=>'Alpura',
        'dias_semana_visita'=>'Martes-Viernes',
        'Telefono'=>'7298756313'
    ],
        ['Proveedor'=>'Coca Cola',
        'dias_semana_visita'=>'Martes-Jueves-Sabado',
        'Telefono'=>'7298756313'
],
        ['Proveedor'=>'Barcel',
        'dias_semana_visita'=>'Martes-Jueves',
        'Telefono'=>'7298756313'
],
        ['Proveedor'=>'Grupo Corona',
        'dias_semana_visita'=>'Sabado',
        'Telefono'=>'7298756313'
        ]
       ]);
    }
}
