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
                DB::table('ventas_detalle')->insert([
                        [
                                'id' => 1,
                                'producto_id' => 2,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 59.00,
                                'fecha' => '2021-12-1',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 2,
                                'producto_id' => 2,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 60.00,
                                'fecha' => '2021-12-1',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 3,
                                'producto_id' => 1,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 59.00,
                                'fecha' => '2021-12-1',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 4,
                                'producto_id' => 1,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 57.00,
                                'fecha' => '2021-12-1',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 5,
                                'producto_id' => 1,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 54.00,
                                'fecha' => '2021-12-6',
                                'usuario_id' => 3

                        ],
                        [
                                'id' => 6,
                                'producto_id' => 2,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 53.00,
                                'fecha' => '2021-12-5',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 7,
                                'producto_id' => 1,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 20.00,
                                'fecha' => '2021-12-4',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 8,
                                'producto_id' => 2,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 40.00,
                                'fecha' => '2021-12-3',
                                'usuario_id' => 3
                        ],
                        [
                                'id' => 9,
                                'producto_id' => 1,
                                'productos_vendidos' => 'Sabritas,cocacola',
                                'precio' => 50.00,
                                'fecha' => '2021-12-2',
                                'usuario_id' => 3
                        ]
                ]);
        }
}
