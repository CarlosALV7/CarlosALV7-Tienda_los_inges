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
 public function run() { DB::table('estados')->insert([ ['estados' =>  'Aguascalientes'], 
    ['estados' => 'Baja California'], 
    ['estados' => 'Baja California Sur'], 
    ['estados' => 'Campeche'], 
    ['estados' => 'Coahuila de Zaragoza'], 
    ['estados' => 'Colima'], 
    ['estados' => 'Chiapas'], 
    ['estados'  => 'Chihuahua'],
    ['estados' => 'Distrito Federal'],
    ['estados' => 'Durango'],
    ['estados' => 'Guanajuato'], 
    ['estados' => 'Guerrero'],
	['estados' => 'Hidalgo'], 
    ['estados' => 'Jalisco'], 
    ['estados' => 'México'], 
    ['estados' => 'Michoacán de Ocampo'], 
    ['estados' => 'Morelos'], 
    ['estados' => 'Nayarit'], 
    ['estados' => 'Nuevo León'], 
    ['estados' => 'Oaxaca'], 
    ['estados' => 'Puebla'], 
    ['estados' => 'Querétaro'], 
    ['estados' => 'Quintana Roo'], 
    ['estados' => 'San Luis Potosí'], 
    ['estados' => 'Sinaloa'], 
    ['estados' => 'Sonora'], 
    ['estados' => 'Tabasco'], 
	['estados' => 'Tamaulipas'], 
    ['estados' => 'Tlaxcala'], 
    ['estados' => 'Veracruz de Ignacio de la Llave'], 
	['estados' => 'Yucatán'], 
    ['estados' => 'Zacatecas'],
       ]);
    }
}