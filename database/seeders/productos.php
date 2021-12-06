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
        ['Marca'=>'Sabritas',
        'existencia'=>'22',
        'Precio'=>'16.00',
        'fotografia'=>'1.jpg',
        'nombre'=>'Dorito Incognita',
        'Descripcion'=>'Totopos de maiz con saborizante'
        ]
        ['Marca'=>'Sabritas',
        'existencia'=>'28',
        'Precio'=>'11.00',
        'fotografia'=>'2.jpg',
        'nombre'=>'Cheetos Flamin Hot',
        'Descripcion'=>'Cheetos'
        ]
        ['Marca'=>'Sabritas',
        'existencia'=>'23',
        'Precio'=>'16.00',
        'fotografia'=>'3.jpg',
        'nombre'=>'Dorito Nacho',
        'Descripcion'=>'Totopos de maiz con saborizante'
        ]
        ['Marca'=>'Sabritas',
        'existencia'=>'28',
        'Precio'=>'11.00',
        'fotografia'=>'4.jpg',
        'nombre'=>'Cheetos Torciditos',
        'Descripcion'=>'Cheetos'
        ]
       ]);
    }
}