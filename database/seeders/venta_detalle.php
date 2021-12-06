<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class venta_detalle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   DB::table('venta_detalle')->insert([
        ['precio'=>'55.50',
        'fecha'=>'2021-12-09',
       ],
        ['precio'=>'66',
        'fecha'=>'2021-09-10',
    ],
        ['precio'=>'120',
        'fecha'=>'2021-03-24',
],
        ['precio'=>'55.50',
        'fecha'=>'2021-12-09',
],
        ['precio'=>'66',
        'fecha'=>'2021-09-10',
],
        ['precio'=>'120',
        'fecha'=>'2021-03-24',
],
        ['precio'=>'55.50',
        'fecha'=>'2021-12-09',
],
        ['precio'=>'66',
        'fecha'=>'2021-09-10',
],
        ['precio'=>'120',
        'fecha'=>'2021-03-24',
        ]
       ]);
    }
}