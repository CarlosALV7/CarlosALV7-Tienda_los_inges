<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class direccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direcciones')->insert([
            [
                'id'=>1,
                'estado_id'=>15,
                'municipio_id'=>771,
                'colonia'=>'villa cuauhtémoc',
                'calle'=>'Francisco I Madero',
                'numero_exterior'=>18,
                'numero_interior'=>'',
                'codigo_postal'=>52080
            ],
            [
                'id'=>2,
                'estado_id'=>15,
                'municipio_id'=>771,
                'colonia'=>'Toluca',
                'calle'=>'Isabela Católica',
                'numero_exterior'=>18,
                'numero_interior'=>'',
                'codigo_postal'=>52050
            ]
        ]);
    }
}
