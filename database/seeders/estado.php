<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado extends Seeder
{
    /**
 * Run the database seeds.
 *
 * @return void
 */
 public function run() { DB::table('estados')->insert([ ['estado' =>  'Aguascalientes'], 
    ['estado' => 'Baja California'], 
    ['estado' => 'Baja California Sur'], 
    ['estado' => 'Campeche'], 
    ['estado' => 'Coahuila de Zaragoza'], 
    ['estado' => 'Colima'], 
    ['estado' => 'Chiapas'], 
    ['estado'  => 'Chihuahua'],
    ['estado' => 'Distrito Federal'],
    ['estado' => 'Durango'],
    ['estado' => 'Guanajuato'], 
    ['estado' => 'Guerrero'],
	['estado' => 'Hidalgo'], 
    ['estado' => 'Jalisco'], 
    ['estado' => 'México'], 
    ['estado' => 'Michoacán de Ocampo'], 
    ['estado' => 'Morelos'], 
    ['estado' => 'Nayarit'], 
    ['estado' => 'Nuevo León'], 
    ['estado' => 'Oaxaca'], 
    ['estado' => 'Puebla'], 
    ['estado' => 'Querétaro'], 
    ['estado' => 'Quintana Roo'], 
    ['estado' => 'San Luis Potosí'], 
    ['estado' => 'Sinaloa'], 
    ['estado' => 'Sonora'], 
    ['estado' => 'Tabasco'], 
	['estado' => 'Tamaulipas'], 
    ['estado' => 'Tlaxcala'], 
    ['estado' => 'Veracruz de Ignacio de la Llave'], 
	['estado' => 'Yucatán'], 
    ['estado' => 'Zacatecas'],
       ]);
    }
}