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
        $this->call([ UserTableSeeder::class, estado::class, municipios::class, 
        venta_detalle::class, ventas::class,
                   direcciones::class, proveedores::class, productos::class,]);
    }
}
