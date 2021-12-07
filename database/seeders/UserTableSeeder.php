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
            [
                'id' => 1,
                'name' => 'Ernesto',
                'primer_apellido' => 'Barragan',
                'segundo_apellido' => 'Espinoza',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => '1996-10-10',
                'numero_celular' => '1234567895',
                'numero_fijo' => null,
                'email' => 'dominio@gmail.com',
                'direcciones_id' => 1,
                'email_verified_at' => null,
                'rfc' => null,
                'password' => Hash::make('123456789'),
                'perfil' => 'Admin',
                'estatus' => 'Activo',
                'remember_token' => null,
                'created_at' => '2021-09-30 11:16',
                'updated_at' => '2021-09-30 11:16',
            ],
            [
                
                'id' => 2,
                'name' => 'Juan',
                'primer_apellido' => 'Aldama',
                'segundo_apellido' => 'Gutierrez',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => '1996-10-10',
                'numero_celular' => '1234567895',
                'numero_fijo' => null,
                'email' => 'dominio1@gmail.com',
                'direcciones_id' => 1,
                'email_verified_at' => null,
                'rfc' => null,
                'password' => Hash::make('123456781'),
                'perfil' => 'Admin',
                'estatus' => 'Activo',
                'remember_token' => null,
                'created_at' => '2021-09-30 11:16',
                'updated_at' => '2021-09-30 11:16',
            ],
            [
                
                'id' => 3,
                'name' => 'José',
                'primer_apellido' => 'Barragan',
                'segundo_apellido' => 'Hernández',
                'sexo' => 'Masculino',
                'fecha_nacimiento' => '1996-10-10',
                'numero_celular' => '1234567893',
                'numero_fijo' => null,
                'email' => 'dominio2@gmail.com',
                'direcciones_id' => 1,
                'email_verified_at' => null,
                'rfc' => null,
                'password' => Hash::make('123456789'),
                'perfil' => 'Admin',
                'estatus' => 'Activo',
                'remember_token' => null,
                'created_at' => '2021-09-30 11:16',
                'updated_at' => '2021-09-30 11:16',
            ]
        ]);
    }
}
