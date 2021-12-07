<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        direccionesSeeder::class,
        estado::class,
        municipios::class,
        productos::class,
        proveedores::class,
        UserTableSeeder::class,
        venta_detalle::class,
        ventas::class,
        ]);
    }
}
