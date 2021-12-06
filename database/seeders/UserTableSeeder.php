<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   DB::table('usuarios')->insert([
        ['sueldo'=>'12000',
        'apellido_paterno'=>'Barragan',
        'apellido_materno'=>'Espinoza',
        'nombre'=>'Ernesto',
        'fecha_nacimiento'=>'1996-10-10',
        'rol'=>'Administrador',
        'email'=>'dominio@gmail.com',
        'password'=>Hash::make('123456789'),
        'direccion'=>'1'
       ],
        ['sueldo'=>'5000',
        'apellido_paterno'=>'Perez',
        'apellido_materno'=>'Bernal',
        'nombre'=>'Rosa',
        'fecha_nacimiento'=>'1999-10-10',
        'rol'=>'Empleado',
        'email'=>'dominio2@gmail.com',
        'password'=>Hash::make('123456789'),
        'direccion'=>'2'
    ],
        ['sueldo'=>'5000',
        'apellido_paterno'=>'Vilchis',
        'apellido_materno'=>'Gonzalez',
        'nombre'=>'Julia',
        'fecha_nacimiento'=>'1993-10-10',
        'rol'=>'Empleado',
        'email'=>'dominio2@gmail.com',
        'password'=>Hash::make('123456789'),
        'direccion'=>'3'
]
       ]);
    }
}