<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class direcciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   DB::table('direcciones')->insert([
        ['colonia'=>'8 cedros',
        'calle'=>'Lago de texcoco',
        'no_exterior'=>'102',
        'no_interior'=>'D-12',
        'codigo_postal'=>'50012'
        ]
        ['colonia'=>'Santa Clara',
        'calle'=>'Lerdo de Tejada',
        'no_exterior'=>'1004',
        'no_interior'=>'24',
        'codigo_postal'=>'50100'
        ]
        ['colonia'=>'San Marcos',
        'calle'=>'Santos Degollado',
        'no_exterior'=>'598',
        'no_interior'=>'10',
        'codigo_postal'=>'50180'
        ]
       ]);
    }
}